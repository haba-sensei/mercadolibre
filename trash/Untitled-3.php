$token = "fIaahGjk3Ko:APA91bHEEnvsUwlveN3fQMJgNlfvET4E0Oo455q9N9q0R06RT5OC0NKrVCsH62rSQ_R3oaAgsbt0tB_zcBVg0eLhNyzTHgQhPJ9n-wQkXpjYFtBkbsk81_q5AbhqnuIh4pMKJFD9kVLG";
                $from = "AAAAz6uV008:APA91bF4kM_tW163McSTDJjoLNMujXeZkfAH5s-FcPNSLZZFt1mpDmwure7hXTVeTFcELHNOBC8W4_tMwgbaWAdQEiigFemFo8ZgMjhDjk875_dddYmqOGKqTKe-2UncuKOOBeRKF8ea";
                $msg = array
                      (
                        'body'  => "Testing Testing",
                        'title' => "Hi, From Raj",
                        'receiver' => 'erw',
                        'icon'  => "https://image.flaticon.com/icons/png/512/270/270014.png",/*Default Icon*/
                        'sound' => 'mySound'/*Default sound*/
                      );

                $fields = array
                        (
                            'to'        => $token,
                            'notification'  => $msg
                        );

                $headers = array
                        (
                            'Authorization: key=' . $from,
                            'Content-Type: application/json'
                        );
                //#Send Reponse To FireBase Server
                $ch = curl_init();
                curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
                curl_setopt( $ch,CURLOPT_POST, true );
                curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
                curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
                curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
                curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
                $result = curl_exec($ch );
                //  dd($result);
                curl_close( $ch );
