<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

abstract class Service
{
    protected $model;
    protected $files;
    protected $is_count = false;

    abstract protected function resolveCriteria($data);

    public function update($dataIn, &$model)
    {
        if (is_array($this->files)) {
            foreach ($this->files as $key => $val) {
                if (array_key_exists($val, $dataIn)) {
                    if (Storage::disk("public")->exists($model->$val)) {
                        Storage::disk("uploads")->delete($model->$val);
                    }
                    $dataIn[$val] = Storage::disk('public')->putFile('uploads', $dataIn[$val]);
                    if (exif_imagetype(Storage::disk('public')->path($dataIn[$val])) !== false) {

                        $img = Image::make(Storage::disk('public')->get($dataIn[$val]));
                        $img_small = Image::make(Storage::disk('public')->get($dataIn[$val]));
                        $img_medium = Image::make(Storage::disk('public')->get($dataIn[$val]));

                        $name = basename($dataIn[$val]);
                        $filename = pathinfo($name, PATHINFO_FILENAME);

                        $img->limitColors();
                        $img->encode('webp', 85)->save(Storage::disk('public')
                                ->path('uploads') . '/' . $filename . '.webp');

                        $img_small->limitColors();
                        $img_small->resize(350, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save(Storage::disk('public')
                                ->path('uploads/small') . '/' . $name);

                        $img_small->encode('webp', 85)->save(Storage::disk('public')
                                ->path('uploads/small') . '/' . $filename . '.webp');

                        $img_medium->limitColors();
                        $img_medium->resize(600, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save(Storage::disk('public')
                                ->path('uploads/medium') . '/' . $name);

                        $img_medium->encode('webp', 85)->save(Storage::disk('public')
                                ->path('uploads/medium') . '/' . $filename . '.webp');
                    }
                }
            }
        }
        $this->mapDataModel($dataIn, $model);
        $model->save();
        $model->refresh();
    }

    public function delete($id)
    {
        $res = $this->getOne($id);
        if (is_array($this->files)) {
            foreach ($this->files as $key => $val) {
                if (Storage::disk("public")->exists($res->$val)) {
                    Storage::disk("uploads")->delete($res->$val);
                }
            }
        }

        $res->delete();
    }

    public function create($dataIn, &$model)
    {
        if (is_array($this->files)) {
            foreach ($this->files as $key => $val) {
                if (array_key_exists($val, $dataIn)) {
                    $dataIn[$val] = Storage::disk('public')->putFile('uploads', $dataIn[$val]);
                    if (exif_imagetype(Storage::disk('public')->path($dataIn[$val])) !== false) {

                        $img = Image::make(Storage::disk('public')->get($dataIn[$val]));
                        $img_small = Image::make(Storage::disk('public')->get($dataIn[$val]));
                        $img_medium = Image::make(Storage::disk('public')->get($dataIn[$val]));

                        $name = basename($dataIn[$val]);
                        $filename = pathinfo($name, PATHINFO_FILENAME);

                        $img->limitColors();
                        $img->encode('webp', 85)->save(Storage::disk('public')
                                ->path('uploads') . '/' . $filename . '.webp');

                        $img_small->limitColors();
                        $img_small->resize(350, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save(Storage::disk('public')
                                ->path('uploads/small') . '/' . $name);

                        $img_small->encode('webp', 85)->save(Storage::disk('public')
                                ->path('uploads/small') . '/' . $filename . '.webp');

                        $img_medium->limitColors();
                        $img_medium->resize(600, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save(Storage::disk('public')
                                ->path('uploads/medium') . '/' . $name);

                        $img_medium->encode('webp', 85)->save(Storage::disk('public')
                                ->path('uploads/medium') . '/' . $filename . '.webp');
                    }
                }
            }
        }
        $this->mapDataModel($dataIn, $model);
        $model->save();
        $model->refresh();
    }

    public function getList($criteria = [])
    {
        $this->is_count = false;
		
        return $this->resolveCriteria($criteria)->get();
    }

    public function getCount($criteria = [])
    {
        if (array_key_exists('limit', $criteria))
            unset($criteria['limit']);

        if (array_key_exists('orderBy', $criteria))
            unset($criteria['orderBy']);

        $this->is_count = true;
        return $this->resolveCriteria($criteria)->get()->count();
    }

    public function getSum($criteria = [])
    {
        if (array_key_exists('sum', $criteria))
            return $this->resolveCriteria($criteria)->sum($criteria['sum']);
    }

    public function getOne($id = 0, $slug = '')
    {
        if ($id > 0)
            return $this->resolveCriteria(['id' => $id])->firstOrFail();
        else {
            if (!empty($slug))
                return $this->resolveCriteria(['slug' => $slug])->firstOrFail();
        }
    }

    public function mapDataModel($data, &$model)
    {
        foreach ($model->getFillable() as $key => $value) {
            if (array_key_exists($value, $data)) {
                if ($model->enums && in_array($value, $model->enums)) {
                    $model->$value = strval($data[$value]);
                } else {
                    $model->$value = $data[$value];
                }
            }
        }
    }

    public function deleteByCriteria($criteria, $force = false)
    {
        if ($force)
            return $this->resolveCriteria($criteria)->forceDelete();
        else
            return $this->resolveCriteria($criteria)->delete();
    }
}
