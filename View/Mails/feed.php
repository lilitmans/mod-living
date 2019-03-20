<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body style="margin:0;font-family: Arial;">
<table width="100%" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse;background:#f6f6f6;">
    <tbody>
    <tr>
        <td>
            <table width="608" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse;">
                <tbody>
                <tr>
                    <td height="50" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff">
                        <table width="100%" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse;">
                            <tbody>

                            <tr>
                                <td align="center" style="background-color: white;border-bottom: 1px solid #efd2d2;">
                                    <a target="_blank" title="True Art Studio" href="<?=$baseurl?>">
                                        <img width="450" height="70" style="border:none;margin-top: 10px;" alt="True Art Studio" src="<?=$baseurl?>/assets/images/default/logo.png">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:30px;">
                                    <table width="100%" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse;">
                                        <tbody>
                                        <tr>
                                            <td valign="top">
                                                <p style="color:#444444;font-family:Arial;font-size:23px;margin-top:5px;margin-bottom:20px;line-height:20px;text-align:center">
                                                    You received from Web Site
                                                </p>
                                                <table cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
                                                    <tbody>
                                                    <tr>
                                                        <td width="110" valign="top" height="38" style="font-weight: bold;">
                                                            <p>Name: </p>
                                                        </td>
                                                        <td width="200" valign="top">
                                                            <p><?= isset($params['name']) ? $params['name'] : '' ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="110" valign="top" height="38" style="font-weight: bold;">
                                                            <p>Email: </p>
                                                        </td>
                                                        <td width="200" valign="top">
                                                            <p><?= isset($params['email']) ? $params['email'] : '' ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="110" valign="top" height="38" style="font-weight: bold;">
                                                            <p>sub: </p>
                                                        </td>
                                                        <td width="200" valign="top">
                                                            <p><?= isset($params['sub']) ? $params['sub'] : '' ?></p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p style="font-weight: bold;">
                                                    Question:
                                                </p>
                                                <p style="color:#444444;font-family:Arial;font-size:14px;line-height:19px;margin-top:20px;">
                                                    <?= isset($params['message']) ? $params['message'] : '' ?>
                                                </p>
                                                <p></p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <table width="100%" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse;">
                                        <tbody>
                                        <tr>
                                            <td width="200" align="center" style="padding:0px 30px 20px 0px;">
                                                <div style="color:#222222;font-family:Arial;font-size:14px;line-height:19px;margin-bottom:4px;">
                                                    <div style="margin-right:2px;border:1px solid #29a8df;     border-radius: 17px; width: 28px; height: 24px;display:inline-block;padding-top:4px">
                                                        <a style="margin-right:2px;margin-left: 2px;" target="_blank" href=""><img width="18" height="18" alt="fb" style="border:none;" src="<?=$baseurl?>/assets/images/mails/facebook_m.png"></a>
                                                    </div>
                                                    <div style="margin-right:2px;border:1px solid #29a8df;     border-radius: 17px; width: 28px; height: 24px;display:inline-block;padding-top:4px">
                                                        <a style="margin-right:2px;" target="_blank" href=""><img width="18" height="18" alt="tw" style="border:none;margin-left: 4px;" src="<?=$baseurl?>/assets/images/mails/twitter_m.png"></a>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="50" colspan="3">
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
