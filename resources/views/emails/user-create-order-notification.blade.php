@extends('emails.main')
@section('content')
    <div style="background-color:transparent;">
        <div class="block-grid"
             style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                <!--[if (mso)|(IE)]>
                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                       style="background-color:transparent;">
                <tr>
                    <td align="center">
                        <table cellpadding="0" cellspacing="0" border="0" style="width:600px">
                            <tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
                <!--[if (mso)|(IE)]>
                <td align="center" width="600"
                    style="background-color:#ffffff;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                    valign="top">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
                <![endif]-->
                <div class="col num12"
                     style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
                    <div class="col_cont" style="width:100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div
                            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                            <!--<![endif]-->
                            <table border="0" cellpadding="0" cellspacing="0" class="divider"
                                   role="presentation"
                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                   valign="top" width="100%">
                                <tbody>
                                <tr style="vertical-align: top;" valign="top">
                                    <td class="divider_inner"
                                        style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;"
                                        valign="top">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                               class="divider_content" height="40" role="presentation"
                                               style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 40px; width: 100%;"
                                               valign="top" width="100%">
                                            <tbody>
                                            <tr style="vertical-align: top;" valign="top">
                                                <td height="40"
                                                    style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                    valign="top"><span></span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-right: 25px; padding-left: 25px; padding-top: 0px; padding-bottom: 0px; font-family: Arial, sans-serif">
                            <![endif]-->
                            <div
                                style="color:#555555;font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:1.2;padding-top:0px;padding-right:25px;padding-bottom:0px;padding-left:25px;">
                                <div
                                    style="line-height: 1.2; font-size: 12px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                                    <p style="font-size: 30px; line-height: 1.2; word-break: break-word; text-align: center; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 36px; margin: 0;">
                                                <span style="font-size: 30px;"><strong>
													                {{trans('notification.Hello!')}}
                                                    </strong></span>
                                    </p>
                                </div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                            <table border="0" cellpadding="0" cellspacing="0" class="divider"
                                   role="presentation"
                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                   valign="top" width="100%">
                                <tbody>
                                <tr style="vertical-align: top;" valign="top">
                                    <td class="divider_inner"
                                        style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;"
                                        valign="top">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                               class="divider_content" height="20" role="presentation"
                                               style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 20px; width: 100%;"
                                               valign="top" width="100%">
                                            <tbody>
                                            <tr style="vertical-align: top;" valign="top">
                                                <td height="20"
                                                    style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                    valign="top"><span></span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-right: 25px; padding-left: 25px; padding-top: 5px; padding-bottom: 5px; font-family: Arial, sans-serif">
                            <![endif]-->
                            <div
                                style="color:#555555;font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:1.2;padding-top:5px;padding-right:25px;padding-bottom:5px;padding-left:25px;">
                                <div
                                    style="line-height: 1.2; font-size: 12px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                                    <p style="font-size: 22px; line-height: 1.2; word-break: break-word; text-align: center; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 26px; margin: 0;">
                                        <span
                                            style="font-size: 22px;">                {{         trans('notification.Dear' , ['user' => (isset($user['contact_name']) ? $user['contact_name'] : $user->first_name . ' ' . $user->last_name) ]) }} </span>
                                    </p>
                                    <p style="font-size: 22px; line-height: 1.2; word-break: break-word; text-align: center; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 26px; margin: 0;">
                                          <span style="font-size: 22px;">
											  {{
                     trans('notification.Thanks for Choosing', [
                    'site_name' => trans('all.site-title')
                    ])
                }}
												 </span></p>
                                </div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-right: 25px; padding-left: 25px; padding-top: 5px; padding-bottom: 0px; font-family: Arial, sans-serif">
                            <![endif]-->
                            <div
                                style="color:#555555;font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:1.2;padding-top:5px;padding-right:25px;padding-bottom:0px;padding-left:25px;">
                                <div
                                    style="line-height: 1.2; font-size: 12px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                                    <p style="font-size: 15px; line-height: 1.2; word-break: break-word; text-align: center; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 18px; margin: 0;">
                                        <span
                                            style="font-size: 15px;">{{  Carbon\Carbon::createFromTimestamp(strtotime($order['delivery_time']))->format('M d Y  H:i') }}</span>
                                    </p>
                                </div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                            <table border="0" cellpadding="0" cellspacing="0" class="divider"
                                   role="presentation"
                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                   valign="top" width="100%">
                                <tbody>
                                <tr style="vertical-align: top;" valign="top">
                                    <td class="divider_inner"
                                        style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;"
                                        valign="top">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                               class="divider_content" height="35" role="presentation"
                                               style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 35px; width: 100%;"
                                               valign="top" width="100%">
                                            <tbody>
                                            <tr style="vertical-align: top;" valign="top">
                                                <td height="35"
                                                    style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                    valign="top"><span></span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!--[if (!mso)&(!IE)]><!-->
                        </div>
                        <!--<![endif]-->
                    </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
        </div>
    </div>
    <div style="background-color:transparent;">
        <div class="block-grid two-up no-stack"
             style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                <!--[if (mso)|(IE)]>
                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                       style="background-color:transparent;">
                <tr>
                    <td align="center">
                        <table cellpadding="0" cellspacing="0" border="0" style="width:600px">
                            <tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
                <!--[if (mso)|(IE)]>
                <td align="center" width="300"
                    style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                    valign="top">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
                <![endif]-->
                <div class="col num6"
                     style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
                    <div class="col_cont" style="width:100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div
                            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                            <!--<![endif]-->
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-right: 10px; padding-left: 10px; padding-top: 5px; padding-bottom: 5px; font-family: Arial, sans-serif">
                            <![endif]-->
                            <div
                                style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;">
                                <div
                                    style="line-height: 1.2; font-size: 12px; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px;">
                                    <p style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: {{ trans('notification.right-en-text')}}; mso-line-height-alt: 17px; margin: 0;">
                                        <strong><span
                                                style="font-size: 15px;">{{trans('notification.reference')}} # :</span></strong>
                                    </p>
                                </div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                            <!--[if (!mso)&(!IE)]><!-->
                        </div>
                        <!--<![endif]-->
                    </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td>
                <td align="center" width="300"
                    style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                    valign="top">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
                <![endif]-->
                <div class="col num6"
                     style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
                    <div class="col_cont" style="width:100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div
                            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                            <!--<![endif]-->
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-right: 10px; padding-left: 10px; padding-top: 5px; padding-bottom: 5px; font-family: Arial, sans-serif">
                            <![endif]-->
                            <div
                                style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;">
                                <div
                                    style="line-height: 1.2; font-size: 12px; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px;">
                                    <p style="font-size: 15px; line-height: 1.2; word-break: break-word; text-align: {{ trans('notification.left-en-text') }}; mso-line-height-alt: 18px; margin: 0;">
                                        <span style="font-size: 15px;">{{$order->order_key}}</span></p>
                                </div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                            <!--[if (!mso)&(!IE)]><!-->
                        </div>
                        <!--<![endif]-->
                    </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
        </div>

    </div>
    <div style="background-color: transparent;">
        <div class="block-grid two-up no-stack"
             style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                <!--[if (mso)|(IE)]>
                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                       style="background-color:transparent;">
                <tr>
                    <td align="center">
                        <table cellpadding="0" cellspacing="0" border="0" style="width:600px">
                            <tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
                <!--[if (mso)|(IE)]>
                <td align="center" width="300"
                    style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                    valign="top">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
                <![endif]-->
                <div class="col num6"
                     style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
                    <div class="col_cont" style="width:100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div
                            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                            <!--<![endif]-->
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-right: 10px; padding-left: 10px; padding-top: 5px; padding-bottom: 5px; font-family: Arial, sans-serif">
                            <![endif]-->
                            <div
                                style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;">
                                <div
                                    style="line-height: 1.2; font-size: 12px; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px;">
                                    <p style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: {{ trans('notification.right-en-text')}}; mso-line-height-alt: 17px; margin: 0;">
                                        <strong><span
                                                style="font-size: 15px;">{{trans('notification.Type')}} :</span></strong>
                                    </p>
                                </div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                            <!--[if (!mso)&(!IE)]><!-->
                        </div>
                        <!--<![endif]-->
                    </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td>
                <td align="center" width="300"
                    style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                    valign="top">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
                <![endif]-->
                <div class="col num6"
                     style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
                    <div class="col_cont" style="width:100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div
                            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                            <!--<![endif]-->
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-right: 10px; padding-left: 10px; padding-top: 5px; padding-bottom: 5px; font-family: Arial, sans-serif">
                            <![endif]-->
                            <div
                                style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;">
                                <div
                                    style="line-height: 1.2; font-size: 12px; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px;">
                                    <p style="font-size: 15px; line-height: 1.2; word-break: break-word; text-align: {{ trans('notification.left-en-text') }}; mso-line-height-alt: 18px; margin: 0;">
                                        <span
                                            style="font-size: 15px;">{{($order->is_pickup == '1')?trans('notification.pickup'):trans('notification.Delivery')}}</span>
                                    </p>
                                </div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                            <!--[if (!mso)&(!IE)]><!-->
                        </div>
                        <!--<![endif]-->
                    </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
        </div>
    </div>
    <div style="background-color: transparent;">
        <div class="block-grid two-up no-stack"
             style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                <!--[if (mso)|(IE)]>
                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                       style="background-color:transparent;">
                <tr>
                    <td align="center">
                        <table cellpadding="0" cellspacing="0" border="0" style="width:600px">
                            <tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
                <!--[if (mso)|(IE)]>
                <td align="center" width="300"
                    style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                    valign="top">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
                <![endif]-->
                <div class="col num6"
                     style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
                    <div class="col_cont" style="width:100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div
                            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                            <!--<![endif]-->
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-right: 10px; padding-left: 10px; padding-top: 5px; padding-bottom: 5px; font-family: Arial, sans-serif">
                            <![endif]-->
                            <div
                                style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;">
                                <div
                                    style="line-height: 1.2; font-size: 12px; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px;">
                                    <p style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: {{ trans('notification.right-en-text')}}; mso-line-height-alt: 17px; margin: 0;">
                                        <strong><span
                                                style="font-size: 15px;">{{trans('notification.Status')}}  :</span></strong>
                                    </p>
                                </div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                            <!--[if (!mso)&(!IE)]><!-->
                        </div>
                        <!--<![endif]-->
                    </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td>
                <td align="center" width="300"
                    style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                    valign="top">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
                <![endif]-->
                <div class="col num6"
                     style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
                    <div class="col_cont" style="width:100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div
                            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                            <!--<![endif]-->
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-right: 10px; padding-left: 10px; padding-top: 5px; padding-bottom: 5px; font-family: Arial, sans-serif">
                            <![endif]-->
                            <div
                                style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;">
                                <div
                                    style="line-height: 1.2; font-size: 12px; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px;">
                                    <p style="font-size: 15px; line-height: 1.2; word-break: break-word; text-align: {{ trans('notification.left-en-text') }}; mso-line-height-alt: 18px; margin: 0;">
                                        <span
                                            style="font-size: 15px;">{{ trans("notification.". App\Constants\Constants::ORDER_STATUS_NAME[$order->status_id] )}}</span>
                                    </p>
                                </div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                            <!--[if (!mso)&(!IE)]><!-->
                        </div>
                        <!--<![endif]-->
                    </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
        </div>
    </div>
    <div style="background-color: transparent;">
        <div class="block-grid two-up no-stack"
             style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                <!--[if (mso)|(IE)]>
                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                       style="background-color:transparent;">
                <tr>
                    <td align="center">
                        <table cellpadding="0" cellspacing="0" border="0" style="width:600px">
                            <tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
                <!--[if (mso)|(IE)]>
                <td align="center" width="300"
                    style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                    valign="top">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
                <![endif]-->
                <div class="col num6"
                     style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
                    <div class="col_cont" style="width:100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div
                            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                            <!--<![endif]-->
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-right: 10px; padding-left: 10px; padding-top: 5px; padding-bottom: 5px; font-family: Arial, sans-serif">
                            <![endif]-->
                            <div
                                style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;">
                                <div
                                    style="line-height: 1.2; font-size: 12px; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px;">
                                    <p style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: {{ trans('notification.right-en-text') }}; mso-line-height-alt: 17px; margin: 0;">
                                        <strong><span
                                                style="font-size: 15px;">{{trans('notification.Payment Type')}}  :</span></strong>
                                    </p>
                                </div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                            <!--[if (!mso)&(!IE)]><!-->
                        </div>
                        <!--<![endif]-->
                    </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td>
                <td align="center" width="300"
                    style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                    valign="top">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
                <![endif]-->
                <div class="col num6"
                     style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
                    <div class="col_cont" style="width:100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div
                            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                            <!--<![endif]-->
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-right: 10px; padding-left: 10px; padding-top: 5px; padding-bottom: 5px; font-family: Arial, sans-serif">
                            <![endif]-->
                            <div
                                style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;">
                                <div
                                    style="line-height: 1.2; font-size: 12px; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px;">
                                    <p style="font-size: 15px; line-height: 1.2; word-break: break-word; text-align: {{ trans('notification.left-en-text') }}; mso-line-height-alt: 18px; margin: 0;">
                                        <span
                                            style="font-size: 15px;">{{ trans("notification.".App\Constants\Constants::PAYMENT_METHOD[$order->payment_method] )}}</span>
                                    </p>
                                </div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                            <!--[if (!mso)&(!IE)]><!-->
                        </div>
                        <!--<![endif]-->
                    </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
        </div>
    </div>
    <div style="background-color: transparent;">
        <div class="block-grid two-up no-stack"
             style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                <!--[if (mso)|(IE)]>
                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                       style="background-color:transparent;">
                <tr>
                    <td align="center">
                        <table cellpadding="0" cellspacing="0" border="0" style="width:600px">
                            <tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
                <!--[if (mso)|(IE)]>
                <td align="center" width="300"
                    style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                    valign="top">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
                <![endif]-->
                <div class="col num6"
                     style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
                    <div class="col_cont" style="width:100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div
                            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                            <!--<![endif]-->
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-right: 10px; padding-left: 10px; padding-top: 5px; padding-bottom: 5px; font-family: Arial, sans-serif">
                            <![endif]-->
                            <div
                                style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;">
                                <div
                                    style="line-height: 1.2; font-size: 12px; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px;">
                                    <p style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: {{ trans('notification.right-en-text') }}; mso-line-height-alt: 17px; margin: 0;">
                                        <strong><span style="font-size: 15px;">{{trans('notification.Total')}}  :</span></strong>
                                    </p>
                                </div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                            <!--[if (!mso)&(!IE)]><!-->
                        </div>
                        <!--<![endif]-->
                    </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td>
                <td align="center" width="300"
                    style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                    valign="top">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
                <![endif]-->
                <div class="col num6"
                     style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
                    <div class="col_cont" style="width:100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div
                            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                            <!--<![endif]-->
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="padding-right: 10px; padding-left: 10px; padding-top: 5px; padding-bottom: 5px; font-family: Arial, sans-serif">
                            <![endif]-->
                            <div
                                style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px;">
                                <div
                                    style="line-height: 1.2; font-size: 12px; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px;">
                                    <p style="font-size: 15px; line-height: 1.2; word-break: break-word; text-align: {{ trans('notification.left-en-text') }}; mso-line-height-alt: 18px; margin: 0;">
                                                <span style="font-size: 15px;">{{ $order->total }} {{
                                                    config('app.currency')}}</span></p>
                                </div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                            <!--[if (!mso)&(!IE)]><!-->
                        </div>
                        <!--<![endif]-->
                    </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
        </div>
    </div>
    <div style="background-color:transparent;">
        <div class="block-grid"
             style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                <!--[if (mso)|(IE)]>
                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                       style="background-color:transparent;">
                <tr>
                    <td align="center">
                        <table cellpadding="0" cellspacing="0" border="0" style="width:600px">
                            <tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
                <!--[if (mso)|(IE)]>
                <td align="center" width="600"
                    style="background-color:#ffffff;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                    valign="top">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
                <![endif]-->
                <div class="col num12"
                     style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
                    <div class="col_cont" style="width:100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div
                            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                            <!--<![endif]-->
                            <table border="0" cellpadding="0" cellspacing="0" class="divider"
                                   role="presentation"
                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                   valign="top" width="100%">
                                <tbody>
                                <tr style="vertical-align: top;" valign="top">
                                    <td class="divider_inner"
                                        style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;"
                                        valign="top">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                               class="divider_content" height="35" role="presentation"
                                               style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 35px; width: 100%;"
                                               valign="top" width="100%">
                                            <tbody>
                                            <tr style="vertical-align: top;" valign="top">
                                                <td height="35"
                                                    style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                    valign="top"><span></span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!--[if (!mso)&(!IE)]><!-->
                        </div>
                        <!--<![endif]-->
                    </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
        </div>
    </div>
    @if($order->is_pickup == '0')
        <div style="background-color:transparent;">
            <div class="block-grid three-up"
                 style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
                <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                    <!--[if (mso)|(IE)]>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0"
                           style="background-color:transparent;">
                    <tr>
                        <td align="center">
                            <table cellpadding="0" cellspacing="0" border="0" style="width:600px">
                                <tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
                    <!--[if (mso)|(IE)]>
                    <td align="center" width="150"
                        style="background-color:#ffffff;width:150px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                        valign="top">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;">
                    <![endif]-->
                    <div class="col num3"
                         style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 150px; width: 150px;">
                        <div class="col_cont" style="width:100% !important;">
                            <!--[if (!mso)&(!IE)]><!-->
                            <div
                                style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                <!--<![endif]-->
                                <table border="0" cellpadding="0" cellspacing="0" class="divider"
                                       role="presentation"
                                       style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                       valign="top" width="100%">
                                    <tbody>
                                    <tr style="vertical-align: top;" valign="top">
                                        <td class="divider_inner"
                                            style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
                                            valign="top">
                                            <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                   class="divider_content" height="0" role="presentation"
                                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 0px; width: 100%;"
                                                   valign="top" width="100%">
                                                <tbody>
                                                <tr style="vertical-align: top;" valign="top">
                                                    <td height="0"
                                                        style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                        valign="top"><span></span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                        </div>
                    </div>
                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                    <!--[if (mso)|(IE)]></td>
                    <td align="center" width="300"
                        style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                        valign="top">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;background-color:#f1f2f6;">
                    <![endif]-->
                    <div class="col num6"
                         style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; background-color: #f1f2f6; width: 300px;">
                        <div class="col_cont" style="width:100% !important;">
                            <!--[if (!mso)&(!IE)]><!-->
                            <div
                                style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                <!--<![endif]-->
                                <table border="0" cellpadding="0" cellspacing="0" class="divider"
                                       role="presentation"
                                       style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                       valign="top" width="100%">
                                    <tbody>
                                    <tr style="vertical-align: top;" valign="top">
                                        <td class="divider_inner"
                                            style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;"
                                            valign="top">
                                            <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                   class="divider_content" height="15" role="presentation"
                                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 15px; width: 100%;"
                                                   valign="top" width="100%">
                                                <tbody>
                                                <tr style="vertical-align: top;" valign="top">
                                                    <td height="15"
                                                        style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                        valign="top"><span></span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div align="center" class="img-container center autowidth"
                                     style="padding-right: 0px;padding-left: 0px;">
                                    <!--[if mso]>
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr style="line-height:0px">
                                        <td style="padding-right: 0px;padding-left: 0px;" align="center">
                                    <![endif]--><img align="center" alt="Alternate text" border="0"
                                                     class="center autowidth"
                                                     src="https://api.laffahrestaurants.com/storage/images/Group_4.png"
                                                     style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 17px; display: block;"
                                                     title="Alternate text" width="17"/>
                                    <!--[if mso]></td></tr></table><![endif]-->
                                </div>
                                <table border="0" cellpadding="0" cellspacing="0" class="divider"
                                       role="presentation"
                                       style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                       valign="top" width="100%">
                                    <tbody>
                                    <tr style="vertical-align: top;" valign="top">
                                        <td class="divider_inner"
                                            style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;"
                                            valign="top">
                                            <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                   class="divider_content" height="15" role="presentation"
                                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 15px; width: 100%;"
                                                   valign="top" width="100%">
                                                <tbody>
                                                <tr style="vertical-align: top;" valign="top">
                                                    <td height="15"
                                                        style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                        valign="top"><span></span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--[if mso]>
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px; font-family: Arial, sans-serif">
                                <![endif]-->
                                <div
                                    style="color:#555555;font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:1.5;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;">
                                    <div
                                        style="line-height: 1.5; font-size: 12px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #555555; mso-line-height-alt: 18px;">
                                        <p style="font-size: 15px; line-height: 1.5; word-break: break-word; text-align: center; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 23px; margin: 0;">
                                                <span style="font-size: 15px;">
												{{ $order->address->city }} - {{ $order->address->area }}
												</span></p>
                                        <p style="font-size: 15px; line-height: 1.5; word-break: break-word; text-align: center; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 23px; margin: 0;">
                                                <span style="font-size: 15px;">{{
													$order->address->street
													}}, {{trans('notification.Building')}}{{
													$order->address->building
													}}, {{ trans('notification.floor')}} {{
													$order->address->floor
													}}</span></p>
                                    </div>
                                </div>
                                <!--[if mso]></td></tr></table><![endif]-->
                                <table border="0" cellpadding="0" cellspacing="0" class="divider"
                                       role="presentation"
                                       style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                       valign="top" width="100%">
                                    <tbody>
                                    <tr style="vertical-align: top;" valign="top">
                                        <td class="divider_inner"
                                            style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;"
                                            valign="top">
                                            <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                   class="divider_content" height="15" role="presentation"
                                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 15px; width: 100%;"
                                                   valign="top" width="100%">
                                                <tbody>
                                                <tr style="vertical-align: top;" valign="top">
                                                    <td height="15"
                                                        style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                        valign="top"><span></span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--[if mso]>
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px; font-family: Arial, sans-serif">
                                <![endif]-->
                                <div
                                    style="color:#555555;font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:1.5;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;">
                                    <div
                                        style="line-height: 1.5; font-size: 12px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #555555; mso-line-height-alt: 18px;">
                                        <p style="font-size: 14px; line-height: 1.5; word-break: break-word; text-align: center; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 21px; margin: 0;">
                                            <strong><span style="font-size: 15px; color: #db3743;"><a
                                                        href="http://www.example.com" rel="noopener"
                                                        style="text-decoration: underline; color: #db3743;"
                                                        target="_blank">    {{trans('notification.phone')}}:
                {{isset($user['contact_phone_number']) ? $user['contact_phone_number'] : $user->phone_number}} </a></span></strong>
                                        </p>
                                    </div>
                                </div>
                                <!--[if mso]></td></tr></table><![endif]-->
                                <table border="0" cellpadding="0" cellspacing="0" class="divider"
                                       role="presentation"
                                       style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                       valign="top" width="100%">
                                    <tbody>
                                    <tr style="vertical-align: top;" valign="top">
                                        <td class="divider_inner"
                                            style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;"
                                            valign="top">
                                            <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                   class="divider_content" height="25" role="presentation"
                                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 25px; width: 100%;"
                                                   valign="top" width="100%">
                                                <tbody>
                                                <tr style="vertical-align: top;" valign="top">
                                                    <td height="25"
                                                        style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                        valign="top"><span></span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                        </div>
                    </div>
                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                    <!--[if (mso)|(IE)]></td>
                    <td align="center" width="150"
                        style="background-color:#ffffff;width:150px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                        valign="top">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;">
                    <![endif]-->
                    <div class="col num3"
                         style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 150px; width: 150px;">
                        <div class="col_cont" style="width:100% !important;">
                            <!--[if (!mso)&(!IE)]><!-->
                            <div
                                style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                <!--<![endif]-->
                                <table border="0" cellpadding="0" cellspacing="0" class="divider"
                                       role="presentation"
                                       style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                       valign="top" width="100%">
                                    <tbody>
                                    <tr style="vertical-align: top;" valign="top">
                                        <td class="divider_inner"
                                            style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
                                            valign="top">
                                            <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                   class="divider_content" height="0" role="presentation"
                                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 0px; width: 100%;"
                                                   valign="top" width="100%">
                                                <tbody>
                                                <tr style="vertical-align: top;" valign="top">
                                                    <td height="0"
                                                        style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                        valign="top"><span></span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                        </div>
                    </div>
                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                </div>
            </div>
        </div>
    @endif
    <div style="background-color:transparent;">
        <div class="block-grid"
             style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                <!--[if (mso)|(IE)]>
                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                       style="background-color:transparent;">
                <tr>
                    <td align="center">
                        <table cellpadding="0" cellspacing="0" border="0" style="width:600px">
                            <tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
                <!--[if (mso)|(IE)]>
                <td align="center" width="600"
                    style="background-color:#ffffff;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                    valign="top">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;">
                <![endif]-->
                <div class="col num12"
                     style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
                    <div class="col_cont" style="width:100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div
                            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 10px; padding-left: 10px;">
                            <!--<![endif]-->
                            <table border="0" cellpadding="0" cellspacing="0" class="divider"
                                   role="presentation"
                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                   valign="top" width="100%">
                                <tbody>
                                <tr style="vertical-align: top;" valign="top">
                                    <td class="divider_inner"
                                        style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;"
                                        valign="top">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                               class="divider_content" height="40" role="presentation"
                                               style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 40px; width: 100%;"
                                               valign="top" width="100%">
                                            <tbody>
                                            <tr style="vertical-align: top;" valign="top">
                                                <td height="40"
                                                    style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                    valign="top"><span></span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div align="center" class="button-container"
                                 style="">


                                <table border="0" dir="{{ trans('all.dir') }}" cellpadding="0" cellspacing="0"
                                       class="divider"
                                       role="presentation"
                                       style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #585858; text-align: {{ trans('notification.align') }}"
                                       valign="top" width="100%">
                                    <thead>
                                    <tr style="font-size: 14px; font-weight: 600; border-bottom: 1px solid #f1f1f1; padding-bottom: 7px;">
                                        <th width="40%">{{trans('notification.Items')}}
                                        </th>
                                        <th>{{trans('notification.barcode')}}</th>
                                        <th width="40px">{{trans('notification.Qty')}}</th>
                                        <th>{{trans('notification.Price')}}</th>
                                        <th>{{trans('notification.Offer')}}</th>
                                        <th>{{trans('notification.Total')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($order->orderDetails as $orderDetails)
                                        <tr style="padding-bottom: 7px; border-bottom: 1px solid #f1f1f1;">
                                            <td>
                                                {{$orderDetails->item->translation(App::getLocale())->first()->name}}
                                                <br>
                                                ----
                                                <br>
                                                @foreach($orderDetails->batch->batchDetail as $batchDetail)
                                                    {{$batchDetail->attribute->translation(App::getLocale())->first()->name}} : {{$batchDetail->attributeValue->translation(App::getLocale())->first()->name}},

                                                @endforeach
                                            </td>
                                            <td>{{$orderDetails->batch->barcode}}</td>
                                            <td>{{$orderDetails->qty}}</td>
                                            <td>{{$orderDetails->batch_price}}</td>
                                            <td>{{($orderDetails->discount_percentage)?$orderDetails->discount_percentage.'%':$orderDetails->discount_value}}</td>
                                            <td>{{isset($orderDetails->subtotal_with_customization) ?
                                        $orderDetails->subtotal_with_customization : $orderDetails->subtotal}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr style="margin: 5px 0 2px">
                                        <td></td>
                                        <td colspan="4">{{ trans('notification.VAT')}} {{$order->vat_value}} {{config('app.currency')}}</td>
                                    </tr>
                                    <tr style="margin: 2px 0">
                                        <td></td>
                                        <td colspan="4">{{ trans('notification.Delivery Fee')}} {{$order->delivery_cost}} {{config('app.currency')}}</td>
                                    </tr>
                                    @if($order->promotion)
                                        <tr style="margin: 2px 0">
                                            <td></td>
                                            <td colspan="4">{{ trans('notification.promotion-code')}}: ({{$order->promotion->code}}) - {{$order->discount_value}} {{config('app.currency')}}</td>
                                        </tr>
                                    @endif
                                    <tr style="margin: 2px 0">
                                        <td></td>
                                        <td style="font-weight: 700; font-size: 18px;"
                                            colspan="4">{{trans('notification.Total')}}
                                            {{$order->total}} {{
                                                    config('app.currency')}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                            <table border="0" cellpadding="0" cellspacing="0" class="divider"
                                   role="presentation"
                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                   valign="top" width="100%">
                                <tbody>
                                <tr style="vertical-align: top;" valign="top">
                                    <td class="divider_inner"
                                        style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;"
                                        valign="top">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                               class="divider_content" height="40" role="presentation"
                                               style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 40px; width: 100%;"
                                               valign="top" width="100%">
                                            <tbody>
                                            <tr style="vertical-align: top;" valign="top">
                                                <td height="40"
                                                    style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                    valign="top"><span></span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!--[if (!mso)&(!IE)]><!-->
                        </div>
                        <!--<![endif]-->
                    </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
        </div>
    </div>
@endsection
