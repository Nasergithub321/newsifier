@extends('emails.main_without_link')
@section('content')
    <div style="background-color:transparent;">
        <div class="block-grid"
             style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;">
                    <tr>
                        <td align="center">
                            <table cellpadding="0" cellspacing="0" border="0" style="width:600px">
                                <tr class="layout-full-width" style="background-color:#ffffff">
                                    <td align="center" width="600"
                                        style="background-color:#ffffff;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                                        valign="top">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;">
                                                    <div class="col num12"
                                                         style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
                                                        <div class="col_cont" style="width:100% !important;">
                                                            <div
                                                                style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                                                                <table border="0" cellpadding="0" cellspacing="0"
                                                                       class="divider"
                                                                       role="presentation"
                                                                       style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                                       valign="top" width="100%">
                                                                    <tbody>
                                                                    <tr style="vertical-align: top;" valign="top">
                                                                        <td class="divider_inner"
                                                                            style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;"
                                                                            valign="top">
                                                                            <table align="center" border="0"
                                                                                   cellpadding="0" cellspacing="0"
                                                                                   class="divider_content" height="40"
                                                                                   role="presentation"
                                                                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 40px; width: 100%;"
                                                                                   valign="top" width="100%">
                                                                                <tbody>
                                                                                <tr style="vertical-align: top;"
                                                                                    valign="top">
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

                                                                {{--welcome--}}
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                       border="0">
                                                                    <tr>
                                                                        <td style="padding-right: 25px; padding-left: 25px; padding-top: 0px; padding-bottom: 0px; font-family: Arial, sans-serif">
                                                                            <div
                                                                                style="color:#555555;font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:1.2;padding-top:0px;padding-right:25px;padding-bottom:0px;padding-left:25px;">
                                                                                <div
                                                                                    style="line-height: 1.2; font-size: 12px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                                                                                    <p style="font-size: 30px; line-height: 1.2; word-break: break-word; text-align: center; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 36px; margin: 0;">
                                                <span style="font-size: 30px;">
                                                    <strong>{{trans('notification.welcome')}}</strong>
                                                </span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <table border="0" cellpadding="0" cellspacing="0"
                                                                       class="divider"
                                                                       role="presentation"
                                                                       style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                                       valign="top" width="100%">
                                                                    <tbody>
                                                                    <tr style="vertical-align: top;" valign="top">
                                                                        <td class="divider_inner"
                                                                            style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;"
                                                                            valign="top">
                                                                            <table align="center" border="0"
                                                                                   cellpadding="0" cellspacing="0"
                                                                                   class="divider_content" height="20"
                                                                                   role="presentation"
                                                                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 20px; width: 100%;"
                                                                                   valign="top" width="100%">
                                                                                <tbody>
                                                                                <tr style="vertical-align: top;"
                                                                                    valign="top">
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

                                                                {{--Dear--}}
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                       border="0">
                                                                    <tr>
                                                                        <td style="padding-right: 25px; padding-left: 25px; padding-top: 5px; padding-bottom: 5px; font-family: Arial, sans-serif">
                                                                            <div

                                                                                style="color:#555555;font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:1.2;padding-top:5px;padding-right:25px;padding-bottom:5px;padding-left:25px;">
                                                                                <div
                                                                                    style="line-height: 1.2; font-size: 12px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                                                                                    <p style="font-size: 22px; line-height: 1.2; word-break: break-word; text-align: center; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 26px; margin: 0;">
                                                                                        <span style="font-size: 22px;">
                                                                                            {{ trans('notification.Dear' , ['user' => $user->first_name . ' ' . $user->last_name ]) }}
                                                                                        </span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>

                                                                {{--Your account has been created--}}
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                       border="0">
                                                                    <tr>
                                                                        <td style="padding-right: 25px; padding-left: 25px; padding-top: 5px; padding-bottom: 0px; font-family: Arial, sans-serif">
                                                                            <div
                                                                                style="color:#555555;font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:1.2;padding-top:5px;padding-right:25px;padding-bottom:0px;padding-left:25px;">
                                                                                <div
                                                                                    style="line-height: 1.2; font-size: 12px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                                                                                    <p style="font-size: 15px; line-height: 1.2; word-break: break-word; text-align: center; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 18px; margin: 0;">
                                                                                        <span style="font-size: 15px;">
                                                                                                      {{ trans('notification.Your account has been created.') }}
                                                                                        </span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>

                                                                {{--Promotion--}}
                                                                @if(isset($user->promotion) && !empty($user->promotion))
                                                                    <table width="100%" cellpadding="0" cellspacing="0"
                                                                           border="0">
                                                                        <tr>
                                                                            <td style="padding-right: 25px; padding-left: 25px; padding-top: 5px; padding-bottom: 0px; font-family: Arial, sans-serif">
                                                                                <div
                                                                                    style="color:#555555;font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:1.2;padding-top:5px;padding-right:25px;padding-bottom:0px;padding-left:25px;">
                                                                                    <div
                                                                                        style="line-height: 1.2; font-size: 12px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                                                                                        <p style="font-size: 15px; line-height: 1.2; word-break: break-word; text-align: center; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 18px; margin: 0;">
                                                                                        <span style="font-size: 15px;">
                                                                                            {{ trans('notification.Promotion Code.', [
                                                                                                 'promotion' => $user->promotion->discount_rate,
                                                                                                 'code' => $user->promotion->code
                                                                                                 ])
                                                                                            }}
                                                                                        </span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                @endif

                                                                {{--Button--}}
                                                                <table border="0" cellpadding="0" cellspacing="0"
                                                                       class="divider"
                                                                       role="presentation"
                                                                       style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                                       valign="top" width="100%">
                                                                    <tbody>
                                                                    <tr style="vertical-align: top;" valign="top">
                                                                        <td class="divider_inner"
                                                                            style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;"
                                                                            valign="top">
                                                                            <table align="center" border="0"
                                                                                   cellpadding="0" cellspacing="0"
                                                                                   class="divider_content" height="35"
                                                                                   role="presentation"
                                                                                   style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 35px; width: 100%;"
                                                                                   valign="top" width="100%">
                                                                                <tbody>
                                                                                <tr style="vertical-align: top;"
                                                                                    valign="top">
                                                                                    <td height="35"
                                                                                        style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                                                                        valign="top">
                                                                                        <div align="center"
                                                                                             class="button-container"
                                                                                             style="padding-top:25px;padding-right:10px;padding-bottom:25px;padding-left:10px;">
                                                                                            <table width="100%"
                                                                                                   cellpadding="0"
                                                                                                   cellspacing="0"
                                                                                                   border="0"
                                                                                                   style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                                                                <tr>
                                                                                                    <td style="padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px"
                                                                                                        align="center">
                                                                                                        <v:roundrect
                                                                                                            xmlns:v="urn:schemas-microsoft-com:vml"
                                                                                                            xmlns:w="urn:schemas-microsoft-com:office:word"
                                                                                                            href="{{ $url }}"
                                                                                                            style="height:31.5pt; width:216.75pt; v-text-anchor:middle;"
                                                                                                            arcsize="10%"
                                                                                                            stroke="false"
                                                                                                            fillcolor="#da3743">
                                                                                                            <w:anchorlock/>
                                                                                                            <v:textbox
                                                                                                                inset="0,0,0,0">
                                                                                                                <center
                                                                                                                    style="color:#ffffff; font-family:Arial, sans-serif; font-size:16px">
                                                                                                                    <a href="{{ $url }}"
                                                                                                                       style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: #c39540; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; width: auto; width: auto; border: 1px solid #c39540;  padding-top: 5px; padding-bottom: 5px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;"
                                                                                                                       target="_blank">
                                                                                                                        <span
                                                                                                                            style="padding-left:45px;padding-right:45px;font-size:16px;display:inline-block;">
                                                                                                                            <span
                                                                                                                                style="font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;">
                                                                                                                                {{ trans("notification.Start an Order") }}
                                                                                                                            </span>
                                                                                                                        </span>
                                                                                                                    </a>
                                                                                                                </center>
                                                                                                            </v:textbox>
                                                                                                        </v:roundrect>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </table>

                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection