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
                                <td style="padding-right: 25px; padding-left: 25px; padding-top: 5px; padding-bottom: 0px; font-family: Arial, sans-serif">
                        <![endif]-->
                        <div
                            style="color:#555555;font-family:'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:1.2;padding-top:5px;padding-right:25px;padding-bottom:0px;padding-left:25px;">
                            <div
                                style="line-height: 1.2; font-size: 12px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                                <p style="font-size: 15px; line-height: 1.2; word-break: break-word; text-align: center; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 18px; margin: 0;">
                                    <span style="font-size: 15px;">
											 {{       trans('notification.admin-newsletter-notification', [
                    'email' => $newsletter->email
                    ]) }}
									</span>
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

@endsection
