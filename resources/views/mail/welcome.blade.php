<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <style media="all" rel="stylesheet" type="text/css">
            /* Media Queries */
        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
        .table-step {border: 1px solid #ccc; }
        .table-step tr {border: medium none;  }
        .table-step tr th {
        background: #ececec;
        border-bottom: 1px solid #ccc;
        padding: 15px;
    }
        .table-step tr td {
        border-bottom: 1px solid #ccc;
        padding: 5px 15px;
        vertical-align: middle;
        background: #fafafa;
        }
        .table-step tr:last-child th {
    border-bottom: medium none;
}
.table-step tr:last-child td {
    border-bottom: medium none;
}
h4 { margin-top: 0;
}
 h1 { margin-bottom: 0;
}
.button:hover {
    background: #000 !important;
}
        </style>
    </head>
    <?php

$style = [
    /* Layout ------------------------------ */

    'body' => 'margin: 0; padding: 0; width: 100%; background-color: #dfdfdf;',
    'email-wrapper' => 'width: 100%; margin: 0; padding: 0; background-color: #dfdfdf;',

    /* Masthead ----------------------- */

    'email-masthead' => 'padding: 25px 0 25px 0 ; text-align: center;',
    'email-masthead_name' => 'font-size: 20px; text-transform: uppercase; font-weight: bold; color: #2F3133; text-decoration: none; text-shadow: 0 1px 0 white;',

    'email-body' => 'width: 100%; margin: 0; padding: 0; border-top: 1px solid #EDEFF2; border-bottom: 1px solid #EDEFF2; background-color: #FFF;',
    'email-body_inner' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0;',
    'email-body_cell' => 'padding: 35px;',

    'email-footer' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0; text-align: center;',
    'email-footer_cell' => 'color: #AEAEAE; padding: 20px 0 10px 0; text-align: center;',

    /* Body ------------------------------ */

    'body_action' => 'width: 100%; margin: 10px auto; padding: 0; text-align: center;',
    'body_sub' => 'margin-top: 25px; padding-top: 25px; border-top: 1px solid #EDEFF2;',

    /* Type ------------------------------ */

    'anchor' => 'color: #3869D4;',
    'header-1' => 'margin-top: 0; color: #2F3133; font-size: 19px; font-weight: bold; text-align: left; ',
    'paragraph' => 'margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em; font-style: italic;',
    'paragraph-sub' => 'margin: 0; color: #74787E; font-size: 12px; line-height: 1.5em;',
    'paragraph-center' => 'text-align: center;',

    /* Buttons ------------------------------ */

    /* Buttons ------------------------------ */

    'button' => 'display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px;
                 background-color: #3869D4; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px;
                 text-align: center; text-decoration: none; -webkit-text-size-adjust: none;',

    'button--green' => 'background-color: #22BC66;',
    'button--red' => 'background-color: #dc4d2f;',
    'button--blue' => 'background-color: #3869D4;',

    'button' => 'display: block; display: inline-block; width: auto; min-height: 20px; padding: 5px 20px;
                 background-color: #3869D4; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px;
                 text-align: center; text-decoration: none; -webkit-text-size-adjust: none;',
];
?>
    <?php
$fontFamily = 'font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;';
?>
    <body style="{{ $style['body'] }}">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td align="center" style="{{ $style['email-wrapper'] }}">
                    <table cellpadding="0" cellspacing="0" width="100%">
                        <!-- Logo -->
                        <tr>
                            <td style="{{ $style['email-masthead'] }}">
                                <a href="{{ url('/') }}" style="{{ $fontFamily }} {{ $style['email-masthead_name'] }}" target="_blank">
                                    {{ config('app.name') }}
                                </a>
                            </td>
                        </tr>
                        <!-- Email Body -->
                        <tr>
                            <td style="{{ $style['email-body'] }}" width="100%">
                                <table align="center" cellpadding="0" cellspacing="0" style="{{ $style['email-body_inner'] }}" width="570">
                                    <tr>
                                        <td style="{{ $fontFamily }} {{ $style['email-body_cell'] }}">
                                            <!-- Greeting -->
                                            <h1 style="{{ $style['header-1'] }}">
                                                Hello! {{$user['first_name']}}
                                            </h1>

                                            <h2>Welcome to the site </h2>
<br/>


                                            <!-- Intro -->
                                            <p style="{{ $style['paragraph'] }}">
                                                Thank You for registering at
                                                <a href="{{url('/')}}" target="_blank">
                                                    {{ config('app.name') }}
                                                </a>
                                                <br>
                                            </p>

                                            <!-- Salutation -->
                                            <p style="{{ $style['paragraph'] }}">
                                                Regards,<br>{{ config('app.name') }}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- Footer -->
                        <tr>
                            <td>
                                <table style="{{ $style['email-footer'] }}" align="center" width="570" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="{{ $fontFamily }} {{ $style['email-footer_cell'] }}">
                                            <p style="{{ $style['paragraph-sub'] }}">
                                                &copy; {{ date('Y') }}
                                                <a style="{{ $style['anchor'] }}" href="{{ url('/') }}" target="_blank">{{ config('app.name') }}</a>.
                                                All rights reserved.
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>