// start php mailer;
                          // menampilkan semua error kecuali deprecated dan notice
                          error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

                          require 'phpmailer/PHPMailerAutoload.php';

                          $message = '<html xmlns="http://www.w3.org/1999/xhtml">
                          <head>
                            <meta http-equiv="content-type" content="text/html; charset=utf-8">
                              <meta name="viewport" content="width=device-width, initial-scale=1.0;">
                            <meta name="format-detection" content="telephone=no"/>

                            <!-- Responsive Mobile-First Email Template by Konstantin Savchenko, 2015.
                            https://github.com/konsav/email-templates/  -->

                            <style>
                          /* Reset styles */
                          body { margin: 0; padding: 0; min-width: 100%; width: 100% !important; height: 100% !important;}
                          body, table, td, div, p, a { -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%; }
                          table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important; border-spacing: 0; }
                          img { border: 0; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
                          #outlook a { padding: 0; }
                          .ReadMsgBody { width: 100%; } .ExternalClass { width: 100%; }
                          .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }

                          /* Rounded corners for advanced mail clients only */
                          @media all and (min-width: 560px) {
                            .container { border-radius: 8px; -webkit-border-radius: 8px; -moz-border-radius: 8px; -khtml-border-radius: 8px; }
                          }

                          /* Set color for auto links (addresses, dates, etc.) */
                          a, a:hover {
                            color: #FFFFFF;
                          }
                          .footer a, .footer a:hover {
                            color: #828999;
                          }

                            </style>

                            <!-- MESSAGE SUBJECT -->
                            <title></title>

                          </head>

                          <!-- BODY -->
                          <!-- Set message background color (twice) and text color (twice) -->
                          <body topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%; height: 100%; -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%;
                            background-color: #2D3445;
                            color: #FFFFFF;"
                            bgcolor="#2D3445"
                            text="#FFFFFF">

                          <!-- SECTION / BACKGROUND -->
                          <!-- Set message background color one again -->
                          <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%;" class="background"><tr><td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;"
                            bgcolor="#2D3445">

                          <!-- WRAPPER -->
                          <!-- Set wrapper width (twice) -->
                          <table border="0" cellpadding="0" cellspacing="0" align="center"
                            width="500" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
                            max-width: 500px;" class="wrapper">

                            <tr>
                              <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
                                padding-top: 20px;
                                padding-bottom: 20px;">

                              </td>
                            </tr>

                            

                            <!-- SUPHEADER -->
                            <!-- Set text color and font family ("sans-serif" or "Georgia, serif") -->
                            <tr>
                              <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 30px; font-weight: 400; line-height: 150%; letter-spacing: 2px;
                                padding-top: 27px;
                                padding-bottom: 0;
                                color: red;
                                font-family: sans-serif;" class="supheader">
                                  PENTING...!!
                              </td>
                            </tr>

                            <!-- HEADER -->
                            <!-- Set text color and font family ("sans-serif" or "Georgia, serif") -->
                            <tr>
                              <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;  padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 20px; font-weight: bold; line-height: 130%;
                                padding-top: 5px;
                                color: #FFFFFF;
                                font-family: sans-serif;" class="header">
                                  Mohon Untuk Segera Verifikasi KAIZEN
                              </td>
                            </tr>

                            <!-- PARAGRAPH -->
                            <!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
                            <tr>
                              <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 15px; font-weight: 400; line-height: 160%;
                                padding-top: 15px;
                                color: white;
                                font-family: sans-serif;" class="paragraph">

                            KEPADA BAPAK / IBU SUPERVISOR DAN MANAGER,
                            <p>NOMOR KAIZEN: '.$a1.' </p>
                            <p>DIBUAT OLEH: '.$a3.' </p>
                            <p>NAMA SPV: '.$a15.' </p>
                            TELAH TERDAFTAR, SILAHKAN VERIFIKASI KAIZEN TEAM ANDA. click link dibawah ini :
                              </td>
                            </tr>

                            <!-- BUTTON -->
                            <!-- Set button background color at TD, link/text color at A and TD, font family ("sans-serif" or "Georgia, serif") at TD. For verification codes add "letter-spacing: 5px;". Link format: http://domain.com/?utm_source={{Campaign-Source}}&utm_medium=email&utm_content={{Button-Name}}&utm_campaign={{Campaign-Name}} -->
                            <tr>
                              <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
                                padding-top: 25px;
                                padding-bottom: 5px;" class="button"><a
                                href="https://kaizendvl.com/index2.php" target="_blank" style="text-decoration: underline;">
                                  <table border="0" cellpadding="0" cellspacing="0" align="center" style="max-width: 240px; min-width: 120px; border-collapse: collapse; border-spacing: 0; padding: 0;"><tr><td align="center" valign="middle" style="padding: 12px 24px; margin: 0; text-decoration: underline; border-collapse: collapse; border-spacing: 0; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px;"
                                    bgcolor="#E9703E"><a target="_blank" style="text-decoration: underline;
                                    color: #FFFFFF; font-family: sans-serif; font-size: 17px; font-weight: 400; line-height: 120%;"
                                    href="https://kaizendvl.com/index2.php">
                                      Click Here
                                    </a>
                                </td></tr></table></a>
                                atau copy dan paste link berikut di browser : <a href="https://kaizendvl.com/index2.php"> https://kaizendvl.com/index2.php
                              </td>
                            </tr>




                            <tr>
                              <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 15px; font-weight: 400; line-height: 160%;
                                padding-top: 15px;
                                color: #FFFFFF;
                                font-family: sans-serif;" class="paragraph">

                            Jika ada keluh - kesah, silahkan hubungi team OE di ext : 3004 atau bisa membuat formulir melalui link ini :
                            <a href="https://forms.gle/MQtHe2v1H18Uc4Bo8">Disini</button>
                              </td>
                            </tr>

                              </td>
                            </tr>



                            <!-- LINE -->
                            <!-- Set line color -->
                            <tr>
                              <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
                                padding-top: 30px;" class="line"><hr
                                color="#565F73" align="center" width="100%" size="1" noshade style="margin: 0; padding: 0;" />
                              </td>
                            </tr>

                            <!-- FOOTER -->
                            <!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
                            <tr>
                              <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 13px; font-weight: 400; line-height: 150%;
                                padding-top: 10px;
                                padding-bottom: 20px;
                                color: #828999;
                                font-family: sans-serif;" class="footer">

                                  This email was sent from <a href="https://kaizendvl.com" target="_blank" style="text-decoration: underline; color: #828999; font-family: sans-serif; font-size: 13px; font-weight: 400; line-height: 150%;">kaizendvl.com</a> This is an automated message, do not reply.

                              </td>
                            </tr>

                          <!-- End of WRAPPER -->
                          </table>

                          <!-- End of SECTION / BACKGROUND -->
                          </td></tr></table>

                          </body>
                          </html>
                          ';

                          // membuat obyek phpmailer
                          $mail = new PHPMailer(true);

                          // memberitahu class untuk menggunakan SMTP
                          $mail->IsSMTP();

                          // mengaktifkan debug SMTP (untuk pengujian) atur 0 untuk menonaktifkan mode debugging, 1 untuk menampilkan hasil debug
                          $mail->SMTPDebug = 0;

                          // mengaktifkan otentikasi SMTP
                          $mail->SMTPAuth = true;

                          // menetapkan prefix ke server
                          $mail->SMTPSecure = 'ssl';

                          // atur Gmail sebagai server SMTP
                          $mail->Host = 'smtp.gmail.com';

                          // atur server SMTP untuk server Gmail
                          $mail->Port = 465;

                          // alamat gmail kamu
                          $mail->Username = 'oedarya.citeureup@gmail.com';

                          // password Anda harus disertakan dalam tanda kutip tunggal
                          $mail->Password = 'Darya.2020';

                          // tambahkan subjek
                          $mail->Subject = 'PENTING! Mohon Untuk Segera Verifikasi Kaizen';

                          // alamat email pengirim dan nama
                          $mail->SetFrom('oedarya.citeureup@gmail.com', 'KAIZEN ADMIN');

                          // alamat email penerima
                          $mail->AddAddress('');
                          $mail->AddAddress('');
                          $mail->AddAddress('');

                          // jika kamu mengirim ke beberapa orangg, tambahkan baris ini lagi
                          //$mail->AddAddress('tosend@domain.com');

                          // jika kamu ingin mengirim Carbon copy (Cc)
                          //$mail->AddCC('tosend@domain.com');

                          // jika kamu ingin mengirim Blind carbon copy (Bcc)
                          //$mail->AddBCC('tosend@domain.com');

                          // tambahkan isi pesan
                          $mail->MsgHTML($message);

                          // tambahkan lampiran jika ada
                          // $mail->AddAttachment('time.png');

                          try {
                              // kirim email
                              $mail->Send();
                              $msg = "Email berhasil dikirim";
                          } catch (phpmailerException $e) {
                              $msg = $e->getMessage();
                          } catch (Exception $e) {
                              $msg = $e->getMessage();
                          }

// end php mailer