debug -- ::1 -- 2021-08-28T14:43:31+00:00 -- Initialize Hybridauth\Provider\Facebook, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=facebook
    [enabled] => 1
    [keys] => Array
        (
            [id] => 278764557384180
            [secret] => 749617d11518f4b15aee193cc68af24e
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-28T14:43:31+00:00 -- Hybridauth\Provider\Facebook::authenticate()
debug -- ::1 -- 2021-08-28T14:43:31+00:00 -- Hybridauth\Provider\Facebook::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://www.facebook.com/dialog/oauth?response_type=code&client_id=278764557384180&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dfacebook&scope=email%2C+public_profile&state=HA-ZALBJIMYDWER6CNS03TUG9XVFOKP4H82Q157
)

debug -- ::1 -- 2021-08-28T14:43:32+00:00 -- Initialize Hybridauth\Provider\Facebook, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=facebook
    [enabled] => 1
    [keys] => Array
        (
            [id] => 278764557384180
            [secret] => 749617d11518f4b15aee193cc68af24e
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-28T14:43:32+00:00 -- Hybridauth\Provider\Facebook::authenticate()
debug -- ::1 -- 2021-08-28T14:43:32+00:00 -- Hybridauth\Provider\Facebook::authenticateFinish(), callback url:
Array
(
    [0] => https://localhost/UCapital/assets/php/login.php?provider=facebook&code=AQByLf4r8I8eu66uo8mnRsrDccnjsFXDGcPgcVnBpU4CuiNkMMHR9JZMFMbMU89ZxG2LYM5BNyEzR641KgjRKOZs_vTaHtAG7D_CzC3ilR3EVtGtUw6zBjIcNn2S3Kz80tPX0G8oyy_jIae2U7Pr3tWpP80t856iwJpwTPiI5MeEkGT4BjZniZbXf2OkreDdCI5632S32ZP4MUwoMZtqKUCKbBSPOcfvd_ZhNVyJchKwmns7QSyB9S0NuBUjrmjCimfQrhEsaGuMtI3IZZMD63bczq5ZGy1jfIUyjA27Id7RQ9tClGqwEOlU8vC3ikeKjTSmfpIdzUQNSDXZujmKa2cw&state=HA-ZALBJIMYDWER6CNS03TUG9XVFOKP4H82Q157
)

debug -- ::1 -- 2021-08-28T14:43:32+00:00 -- Hybridauth\HttpClient\Curl::request( https://graph.facebook.com/oauth/access_token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://graph.facebook.com/oauth/access_token
            [method] => POST
            [parameters] => Array
                (
                    [client_id] => 278764557384180
                    [client_secret] => 749617d11518f4b15aee193cc68af24e
                    [grant_type] => authorization_code
                    [redirect_uri] => http://localhost/UCapital/assets/php/login.php?provider=facebook
                    [code] => AQByLf4r8I8eu66uo8mnRsrDccnjsFXDGcPgcVnBpU4CuiNkMMHR9JZMFMbMU89ZxG2LYM5BNyEzR641KgjRKOZs_vTaHtAG7D_CzC3ilR3EVtGtUw6zBjIcNn2S3Kz80tPX0G8oyy_jIae2U7Pr3tWpP80t856iwJpwTPiI5MeEkGT4BjZniZbXf2OkreDdCI5632S32ZP4MUwoMZtqKUCKbBSPOcfvd_ZhNVyJchKwmns7QSyB9S0NuBUjrmjCimfQrhEsaGuMtI3IZZMD63bczq5ZGy1jfIUyjA27Id7RQ9tClGqwEOlU8vC3ikeKjTSmfpIdzUQNSDXZujmKa2cw
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 400
            [headers] => Array
                (
                    [vary] => Accept-Encoding
                    [content_type] => application/json; charset=UTF-8
                    [www_authenticate] => OAuth "Facebook Platform" "redirect_uri_mismatch" "URL लोड नहीं कर सकते: इस URL के डोमेन में एप्लिकेशन के डोमेन शामिल नहीं हैं. इस URL को लोड करने में समर्थ होने के लिए, अपने एप्लिकेशन के सभी डोमेन और उप-डोमेन को अपनी एप्लिकेशन सेटिंग में एप्लिकेशन डोमेन फ़ील्ड में जोड़ें."
                    [facebook_api_version] => v4.0
                    [access_control_allow_origin] => *
                    [strict_transport_security] => max-age=15552000; preload
                    [pragma] => no-cache
                    [cache_control] => no-store
                    [expires] => Sat, 01 Jan 2000 00:00:00 GMT
                    [x_fb_request_id] => AhGT0RsxLo3F6WMMhTUgUhE
                    [x_fb_trace_id] => HLvEyzab/22
                    [x_fb_rev] => 1004325127
                    [x_fb_debug] => 1+CXvyuLbZ1RFcQvBUT6GT6/+uEmVi522gBysoOTynMPO9np58vmXexMVBCLDOFEZpatwagDmYVi9nPdMA36Ew==
                    [content_length] => 1150
                    [date] => Sat, 28 Aug 2021 14:43:32 GMT
                    [priority] => u=3,i
                    [alt_svc] => h3-29=":443"; ma=3600,h3-27=":443"; ma=3600
                    [proxy_status] => http_request_error; e_clientaddr="AcJIzNBUZoiD7ogey14rgODY_ucadwucTkXJqATxKc7FfUvbeZah-sEyDhBPUYng0Iax8HvI98km81bwlzgIDWnpeqy3TRWGL6mjMRI"; e_fb_binaryversion="AcJt7iD5ff1NnbnPXr6gCRcpmMGs9N4vB-jqKm3ZMTaX4xxFHj6qfyT_EKoEQgEtCJv73xc6mThVkPRRYb24ZnJqG5V63loOikw"; e_upip="AcK5yS3wYgceco0ySTlczNPs3FrI3wAeI1ZKvZs0wsi_ayvxtng3eApiFoLezFt6scc8vNhhWjkNJEmpWHTE3FEssc94SIuIJg"; e_proxy="AcKjmVbH2JK-s0k-8ESi5JKrPAfg1CO2rvLnCHfdh2S0zN5Pq1Qm_wPrnnVR-Q9hyP0vFU5OWkBMjAKGOsZi"; e_fb_builduser="AcLMDcIy-61tnanSlq3fDa3lMXh2l_0IINFjRLo8uEu7Ora51_HGNbQ4kFKeRofUg0U"; e_fb_vipaddr="AcInv1elvU7kjiR6YZQAUW8ZF3kmDwr2aoHPPsAzS7A7B6oQPkumQE0nzpgz2tVDiKT2HLwSckdc1Z0ic3oTBRUk3sWC7f3Etg", http_request_error; e_clientaddr="AcLAGJWu0g7RIRjfH3Z8_xq5s5917zsAj0Ir-sg4bh9GNWKp3703YFNLnH4exKrkbcP1sjwNpR1rZeE"; e_fb_binaryversion="AcIcFPxNfH8CfKMj-wN2PTDDpoYVTWspf9yvLSVpaa6nzPuBgPeTSxPUy3X1zxUXZVZzNvm2uG6Pf-YKvgVUfUcgp4EkVubvYXg"; e_upip="AcJm8nVg3F6MdJ-1JRNciFS2GCjRn8J2PBaQVpoCsufkLkQRfVso0-QStIGtseeWLyjTecg8Q1okAQhfdNrrlGKX5lfNDaCMKQ"; e_proxy="AcL0Je7l_Ur4-l06UZw-5JBi9sn9LA7Nq2QofWeBVaV5TadCO5biuhYSx7RwI91NKle1UWc8dpNq11c"; e_fb_builduser="AcLW3pL_SVJfQum2D8f-nVl_DpeRnYojoZq3kqsLvyAHnEvZ0qmsY4ImRzC7J0F5Ua4"; e_fb_vipaddr="AcK_haHKkcg3IXAS2amZ1gqmytsv_rh8MUmbv178HyIG-5XdWh8zRi7fRo04ZIqDNLiIDP7IsqE"
                )

            [body] => {"error":{"message":"URL \u0932\u094b\u0921 \u0928\u0939\u0940\u0902 \u0915\u0930 \u0938\u0915\u0924\u0947: \u0907\u0938 URL \u0915\u0947 \u0921\u094b\u092e\u0947\u0928 \u092e\u0947\u0902 \u090f\u092a\u094d\u0932\u093f\u0915\u0947\u0936\u0928 \u0915\u0947 \u0921\u094b\u092e\u0947\u0928 \u0936\u093e\u092e\u093f\u0932 \u0928\u0939\u0940\u0902 \u0939\u0948\u0902. \u0907\u0938 URL \u0915\u094b \u0932\u094b\u0921 \u0915\u0930\u0928\u0947 \u092e\u0947\u0902 \u0938\u092e\u0930\u094d\u0925 \u0939\u094b\u0928\u0947 \u0915\u0947 \u0932\u093f\u090f, \u0905\u092a\u0928\u0947 \u090f\u092a\u094d\u0932\u093f\u0915\u0947\u0936\u0928 \u0915\u0947 \u0938\u092d\u0940 \u0921\u094b\u092e\u0947\u0928 \u0914\u0930 \u0909\u092a-\u0921\u094b\u092e\u0947\u0928 \u0915\u094b \u0905\u092a\u0928\u0940 \u090f\u092a\u094d\u0932\u093f\u0915\u0947\u0936\u0928 \u0938\u0947\u091f\u093f\u0902\u0917 \u092e\u0947\u0902 \u090f\u092a\u094d\u0932\u093f\u0915\u0947\u0936\u0928 \u0921\u094b\u092e\u0947\u0928 \u092b\u093c\u0940\u0932\u094d\u0921 \u092e\u0947\u0902 \u091c\u094b\u0921\u093c\u0947\u0902.","type":"OAuthException","code":191,"fbtrace_id":"AhGT0RsxLo3F6WMMhTUgUhE"}}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://graph.facebook.com/oauth/access_token
                    [content_type] => application/json; charset=UTF-8
                    [http_code] => 400
                    [header_size] => 2530
                    [request_size] => 323
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.580876
                    [namelookup_time] => 0.045136
                    [connect_time] => 0.082768
                    [pretransfer_time] => 0.159711
                    [size_upload] => 548
                    [size_download] => 1150
                    [speed_download] => 1982
                    [speed_upload] => 944
                    [download_content_length] => 1150
                    [upload_content_length] => 548
                    [starttransfer_time] => 0.159722
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 157.240.198.17
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 60497
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 159186
                    [connect_time_us] => 82768
                    [namelookup_time_us] => 45136
                    [pretransfer_time_us] => 159711
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 159722
                    [total_time_us] => 580876
                    [request_header] => POST /oauth/access_token HTTP/2
Host: graph.facebook.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 548
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => client_id=278764557384180&client_secret=749617d11518f4b15aee193cc68af24e&grant_type=authorization_code&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dfacebook&code=AQByLf4r8I8eu66uo8mnRsrDccnjsFXDGcPgcVnBpU4CuiNkMMHR9JZMFMbMU89ZxG2LYM5BNyEzR641KgjRKOZs_vTaHtAG7D_CzC3ilR3EVtGtUw6zBjIcNn2S3Kz80tPX0G8oyy_jIae2U7Pr3tWpP80t856iwJpwTPiI5MeEkGT4BjZniZbXf2OkreDdCI5632S32ZP4MUwoMZtqKUCKbBSPOcfvd_ZhNVyJchKwmns7QSyB9S0NuBUjrmjCimfQrhEsaGuMtI3IZZMD63bczq5ZGy1jfIUyjA27Id7RQ9tClGqwEOlU8vC3ikeKjTSmfpIdzUQNSDXZujmKa2cw
                    [10002] => https://graph.facebook.com/oauth/access_token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-28T16:06:12+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-28T16:06:12+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-28T16:06:12+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [grant_type] => refresh_token
                    [refresh_token] => 1//0g2sM2ozlJhtyCgYIARAAGBASNwF-L9IrJrqbx8OuJH337bOcxBzwHiCDd9j-W1rSBQ8x5lYng-wzegqbofhZXuW49jYqpkG8Fjo
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Sat, 28 Aug 2021 16:06:13 GMT
                    [pragma] => no-cache
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM-X9izs2X1bFEqhGWYh7GOryo7ScZUFsnXhx3Pj-LGAYQ94I9w8-cqPC_f9w8J7HjsK46M-NrEaYgwS_-xKuuRAKshTBA2sboBJVpzBwWRob2z2ayq_in43KDK8YeLFzFP0DsXVEYnWe6Ik0HnO-YIRyQ",
  "expires_in": 3599,
  "scope": "https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email openid",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6IjgxOWQxZTYxNDI5ZGQzZDNjYWVmMTI5YzBhYzJiYWU4YzZkNDZmYmMiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJJWWVMTnlFeENrb2Q0R1lNOWxUMHRBIiwiaWF0IjoxNjMwMTY2NzczLCJleHAiOjE2MzAxNzAzNzN9.oqDCPtyAUpQIeJ_qTiC0WFeoXCA0TghWLcp9qml6sBKkCCsXHMga2SzI-vD60QSdceR5Dgb0IdlJO6DAjaxTzyjjZwfsTTrjDPQtvo_PqUrruKAF-kB84GHey4qJFSxfSoFMLaxkPEgA-lQtUSfJWxgDC33wIAvHild-GBJqmqWjGGp1WEp_D4su4PlGLRxhUfgMvzHboVNc6kih9mFoPI3UY77NiIUWPNZuYu7rixvyDp9sByBSPvhm5bD-K_n9PE4G5Fjpin-xbtwKUrNqlQh0xMF3LOYnTN8TUrc-L2lSepILt8A7sPDLlzoQ3A0qscLX6iTy3SUlgtVOdlRP4A"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.507524
                    [namelookup_time] => 0.120543
                    [connect_time] => 0.178015
                    [pretransfer_time] => 0.341435
                    [size_upload] => 268
                    [size_download] => 1286
                    [speed_download] => 2536
                    [speed_upload] => 528
                    [download_content_length] => -1
                    [upload_content_length] => 268
                    [starttransfer_time] => 0.341445
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.77.205
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 61500
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 341233
                    [connect_time_us] => 178015
                    [namelookup_time_us] => 120543
                    [pretransfer_time_us] => 341435
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 341445
                    [total_time_us] => 507524
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 268
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => grant_type=refresh_token&refresh_token=1%2F%2F0g2sM2ozlJhtyCgYIARAAGBASNwF-L9IrJrqbx8OuJH337bOcxBzwHiCDd9j-W1rSBQ8x5lYng-wzegqbofhZXuW49jYqpkG8Fjo&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-28T16:06:13+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-X9izs2X1bFEqhGWYh7GOryo7ScZUFsnXhx3Pj-LGAYQ94I9w8-cqPC_f9w8J7HjsK46M-NrEaYgwS_-xKuuRAKshTBA2sboBJVpzBwWRob2z2ayq_in43KDK8YeLFzFP0DsXVEYnWe6Ik0HnO-YIRyQ
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Sat, 28 Aug 2021 16:06:13 GMT
                    [pragma] => no-cache
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 442
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.486492
                    [namelookup_time] => 0.126384
                    [connect_time] => 0.202193
                    [pretransfer_time] => 0.342529
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 635
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.486266
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 216.58.221.42
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 61501
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 342381
                    [connect_time_us] => 202193
                    [namelookup_time_us] => 126384
                    [pretransfer_time_us] => 342529
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 486266
                    [total_time_us] => 486492
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-X9izs2X1bFEqhGWYh7GOryo7ScZUFsnXhx3Pj-LGAYQ94I9w8-cqPC_f9w8J7HjsK46M-NrEaYgwS_-xKuuRAKshTBA2sboBJVpzBwWRob2z2ayq_in43KDK8YeLFzFP0DsXVEYnWe6Ik0HnO-YIRyQ


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-X9izs2X1bFEqhGWYh7GOryo7ScZUFsnXhx3Pj-LGAYQ94I9w8-cqPC_f9w8J7HjsK46M-NrEaYgwS_-xKuuRAKshTBA2sboBJVpzBwWRob2z2ayq_in43KDK8YeLFzFP0DsXVEYnWe6Ik0HnO-YIRyQ
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-28T16:06:30+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-28T16:06:30+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-28T16:06:30+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-X9izs2X1bFEqhGWYh7GOryo7ScZUFsnXhx3Pj-LGAYQ94I9w8-cqPC_f9w8J7HjsK46M-NrEaYgwS_-xKuuRAKshTBA2sboBJVpzBwWRob2z2ayq_in43KDK8YeLFzFP0DsXVEYnWe6Ik0HnO-YIRyQ
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [pragma] => no-cache
                    [date] => Sat, 28 Aug 2021 16:06:31 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 442
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.366296
                    [namelookup_time] => 0.00082
                    [connect_time] => 0.061621
                    [pretransfer_time] => 0.216546
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 844
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.366106
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 216.58.221.42
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 52876
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 216378
                    [connect_time_us] => 61621
                    [namelookup_time_us] => 820
                    [pretransfer_time_us] => 216546
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 366106
                    [total_time_us] => 366296
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-X9izs2X1bFEqhGWYh7GOryo7ScZUFsnXhx3Pj-LGAYQ94I9w8-cqPC_f9w8J7HjsK46M-NrEaYgwS_-xKuuRAKshTBA2sboBJVpzBwWRob2z2ayq_in43KDK8YeLFzFP0DsXVEYnWe6Ik0HnO-YIRyQ


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-X9izs2X1bFEqhGWYh7GOryo7ScZUFsnXhx3Pj-LGAYQ94I9w8-cqPC_f9w8J7HjsK46M-NrEaYgwS_-xKuuRAKshTBA2sboBJVpzBwWRob2z2ayq_in43KDK8YeLFzFP0DsXVEYnWe6Ik0HnO-YIRyQ
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T06:00:20+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T06:00:20+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-29T06:00:20+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [grant_type] => refresh_token
                    [refresh_token] => 1//0g2sM2ozlJhtyCgYIARAAGBASNwF-L9IrJrqbx8OuJH337bOcxBzwHiCDd9j-W1rSBQ8x5lYng-wzegqbofhZXuW49jYqpkG8Fjo
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [date] => Sun, 29 Aug 2021 06:00:21 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM85Toi_J3jb26dQ1tc2vYee2YA3uDq_Y2pjdVJ7n2KTGf91_QH5fhy7zcrTFYaVAuA2vLkamE4lwSIuyzBua-ncVm5RaAF_NERg7Mz5op62EQzodE-rjPrrDR3h4Iv90s7dro_n6xIFN9WYEKYtiO1Spw",
  "expires_in": 3599,
  "scope": "https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email openid",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6IjgxOWQxZTYxNDI5ZGQzZDNjYWVmMTI5YzBhYzJiYWU4YzZkNDZmYmMiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJKb1ZlNUhpUEE3VHpEUWdxTUg1aElRIiwiaWF0IjoxNjMwMjE2ODIxLCJleHAiOjE2MzAyMjA0MjF9.LBL2gQP8Mi46Hyr938vkHCb1iOvtztJIrGqCP08MoaHR66mgmfHMwAxTcEyPl6Hgn6dD9A7aNrFlh2NueTPj5IS5PLOKGIDiH3IbVtDHT58IE16t-ClibScynqruPYTaeIupCp4oPNNmdP9m8Mi4xNcazNqJx3CVBhLsh_f48FY0xbQDr-1C_61kJTJmaDhtR6XveHxGIKZHTnM0Dqr8fec7jtSTVyq3bU-_XzEQzX6h6qYlKpG0YaQKa53a-5uGB98kJ9oqToH7hRUMWkuS1fWWfS-FpowfptdT-WzY2y8gYvB2GSRZrH0aG_ug62WRnjM3rrvSz7X8KdQvKlZPtQ"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.546547
                    [namelookup_time] => 0.087236
                    [connect_time] => 0.133199
                    [pretransfer_time] => 0.363582
                    [size_upload] => 268
                    [size_download] => 1286
                    [speed_download] => 2355
                    [speed_upload] => 490
                    [download_content_length] => -1
                    [upload_content_length] => 268
                    [starttransfer_time] => 0.363595
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 172.217.167.205
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 51461
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 358486
                    [connect_time_us] => 133199
                    [namelookup_time_us] => 87236
                    [pretransfer_time_us] => 363582
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 363595
                    [total_time_us] => 546547
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 268
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => grant_type=refresh_token&refresh_token=1%2F%2F0g2sM2ozlJhtyCgYIARAAGBASNwF-L9IrJrqbx8OuJH337bOcxBzwHiCDd9j-W1rSBQ8x5lYng-wzegqbofhZXuW49jYqpkG8Fjo&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T06:00:21+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM85Toi_J3jb26dQ1tc2vYee2YA3uDq_Y2pjdVJ7n2KTGf91_QH5fhy7zcrTFYaVAuA2vLkamE4lwSIuyzBua-ncVm5RaAF_NERg7Mz5op62EQzodE-rjPrrDR3h4Iv90s7dro_n6xIFN9WYEKYtiO1Spw
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [date] => Sun, 29 Aug 2021 06:00:22 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 442
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.410859
                    [namelookup_time] => 0.080956
                    [connect_time] => 0.119659
                    [pretransfer_time] => 0.254649
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 753
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.40585
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.182.170
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 51462
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 254500
                    [connect_time_us] => 119659
                    [namelookup_time_us] => 80956
                    [pretransfer_time_us] => 254649
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 405850
                    [total_time_us] => 410859
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM85Toi_J3jb26dQ1tc2vYee2YA3uDq_Y2pjdVJ7n2KTGf91_QH5fhy7zcrTFYaVAuA2vLkamE4lwSIuyzBua-ncVm5RaAF_NERg7Mz5op62EQzodE-rjPrrDR3h4Iv90s7dro_n6xIFN9WYEKYtiO1Spw


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM85Toi_J3jb26dQ1tc2vYee2YA3uDq_Y2pjdVJ7n2KTGf91_QH5fhy7zcrTFYaVAuA2vLkamE4lwSIuyzBua-ncVm5RaAF_NERg7Mz5op62EQzodE-rjPrrDR3h4Iv90s7dro_n6xIFN9WYEKYtiO1Spw
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T06:01:55+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T06:01:55+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-29T06:01:55+00:00 -- Hybridauth\Provider\Google::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://accounts.google.com/o/oauth2/auth?response_type=code&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&state=HA-QT5MB2IO0F96AZR3WKGVJ8CHE1DLNXPS7Y4U
)

debug -- ::1 -- 2021-08-29T06:02:04+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T06:02:04+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-29T06:02:04+00:00 -- Hybridauth\Provider\Google::authenticateFinish(), callback url:
Array
(
    [0] => http://localhost/UCapital/assets/php/login.php?provider=google&state=HA-QT5MB2IO0F96AZR3WKGVJ8CHE1DLNXPS7Y4U&code=4%2F0AX4XfWgTdP0yGdWFipXZvZAEal6Ok-asv3HFc6EduZ6Krty14sz--o9jX_uPRQJ7AYEisw&scope=email+profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+openid&authuser=1&prompt=consent
)

debug -- ::1 -- 2021-08-29T06:02:04+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                    [grant_type] => authorization_code
                    [redirect_uri] => http://localhost/UCapital/assets/php/login.php?provider=google
                    [code] => 4/0AX4XfWgTdP0yGdWFipXZvZAEal6Ok-asv3HFc6EduZ6Krty14sz--o9jX_uPRQJ7AYEisw
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [date] => Sun, 29 Aug 2021 06:02:05 GMT
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM_5bxeTd12E7ojX-FcbXgmQLxzD00ZwRRtLn6L0Wt9PaCVo7vqRVp4IA4yOdumniGLrAMBzxGdUMjBlHPedjfLI0VneyjsQB3H_dgV_eULWlXKVnuqm2THF_Z8uL4546z4vntJswMxuQGH6BfAFMtFV",
  "expires_in": 3599,
  "refresh_token": "1//0gvOS7V5ncZcTCgYIARAAGBASNwF-L9IrVLZsEkrF-Lm79hP-M5XFo5NW1KmHeFaPmDHNZejUHPryecCN0IsLE14_g68O_i0i0eQ",
  "scope": "https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email openid",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6IjgxOWQxZTYxNDI5ZGQzZDNjYWVmMTI5YzBhYzJiYWU4YzZkNDZmYmMiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJIRzBoT3p1aldTa0pHcFU0X3ZvNGdnIiwiaWF0IjoxNjMwMjE2OTI1LCJleHAiOjE2MzAyMjA1MjV9.Edpm5kEBMVEBsCsP-0pcehKQe_mcFoTFhhqyHHhx3dlI3zmX1bizIITxd1FkYOnL3bu6MAXsqw3HBLo20mWEKGomrdLOlktasujwtvE40A7cy_8G7dNwrBmueEPcqIZM12A1HZqMebBb4J_SecRhGO8jHd4BaigIdLiefFgoK5ecgO8yL6oqSxxu1BWfihixVm5f9qWne06CNNeIkR9UH-BFk2Sf1wwS004ALfJpd4wYgkBdIwxaxvwEkAf9TABOBjTw5kBZeEcv1q_ymz-tABJGR916a_DyA4ibrHqlC54AHRvs0Q7gtZf2t_Bp-QfOy-erBR7QSFNjkVjzMyVw3A"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.393916
                    [namelookup_time] => 0.000989
                    [connect_time] => 0.054237
                    [pretransfer_time] => 0.202781
                    [size_upload] => 326
                    [size_download] => 1410
                    [speed_download] => 3587
                    [speed_upload] => 829
                    [download_content_length] => -1
                    [upload_content_length] => 326
                    [starttransfer_time] => 0.202788
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 172.217.167.205
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 55988
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 202610
                    [connect_time_us] => 54237
                    [namelookup_time_us] => 989
                    [pretransfer_time_us] => 202781
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 202788
                    [total_time_us] => 393916
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 326
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY&grant_type=authorization_code&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&code=4%2F0AX4XfWgTdP0yGdWFipXZvZAEal6Ok-asv3HFc6EduZ6Krty14sz--o9jX_uPRQJ7AYEisw
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T06:02:04+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM_5bxeTd12E7ojX-FcbXgmQLxzD00ZwRRtLn6L0Wt9PaCVo7vqRVp4IA4yOdumniGLrAMBzxGdUMjBlHPedjfLI0VneyjsQB3H_dgV_eULWlXKVnuqm2THF_Z8uL4546z4vntJswMxuQGH6BfAFMtFV
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [date] => Sun, 29 Aug 2021 06:02:05 GMT
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.364164
                    [namelookup_time] => 0.000767
                    [connect_time] => 0.042908
                    [pretransfer_time] => 0.20172
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 848
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.358118
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.182.170
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 55989
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 201567
                    [connect_time_us] => 42908
                    [namelookup_time_us] => 767
                    [pretransfer_time_us] => 201720
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 358118
                    [total_time_us] => 364164
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM_5bxeTd12E7ojX-FcbXgmQLxzD00ZwRRtLn6L0Wt9PaCVo7vqRVp4IA4yOdumniGLrAMBzxGdUMjBlHPedjfLI0VneyjsQB3H_dgV_eULWlXKVnuqm2THF_Z8uL4546z4vntJswMxuQGH6BfAFMtFV


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM_5bxeTd12E7ojX-FcbXgmQLxzD00ZwRRtLn6L0Wt9PaCVo7vqRVp4IA4yOdumniGLrAMBzxGdUMjBlHPedjfLI0VneyjsQB3H_dgV_eULWlXKVnuqm2THF_Z8uL4546z4vntJswMxuQGH6BfAFMtFV
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T15:26:21+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:26:21+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-29T15:26:21+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [grant_type] => refresh_token
                    [refresh_token] => 1//0gvOS7V5ncZcTCgYIARAAGBASNwF-L9IrVLZsEkrF-Lm79hP-M5XFo5NW1KmHeFaPmDHNZejUHPryecCN0IsLE14_g68O_i0i0eQ
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 0
            [headers] => Array
                (
                )

            [body] => 
        )

    [client] => Array
        (
            [error] => Could not resolve host: accounts.google.com
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => 
                    [http_code] => 0
                    [header_size] => 0
                    [request_size] => 0
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.002943
                    [namelookup_time] => 0
                    [connect_time] => 0
                    [pretransfer_time] => 0
                    [size_upload] => 0
                    [size_download] => 0
                    [speed_download] => 0
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 0
                    [local_ip] => 
                    [local_port] => 0
                    [http_version] => 0
                    [protocol] => 0
                    [ssl_verifyresult] => 0
                    [scheme] => 
                    [appconnect_time_us] => 0
                    [connect_time_us] => 0
                    [namelookup_time_us] => 0
                    [pretransfer_time_us] => 0
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 0
                    [total_time_us] => 2943
                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => grant_type=refresh_token&refresh_token=1%2F%2F0gvOS7V5ncZcTCgYIARAAGBASNwF-L9IrVLZsEkrF-Lm79hP-M5XFo5NW1KmHeFaPmDHNZejUHPryecCN0IsLE14_g68O_i0i0eQ&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

error -- ::1 -- 2021-08-29T15:26:21+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), error:
Array
(
    [0] => Could not resolve host: accounts.google.com
)

debug -- ::1 -- 2021-08-29T15:27:23+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:27:23+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-29T15:27:23+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [grant_type] => refresh_token
                    [refresh_token] => 1//0gvOS7V5ncZcTCgYIARAAGBASNwF-L9IrVLZsEkrF-Lm79hP-M5XFo5NW1KmHeFaPmDHNZejUHPryecCN0IsLE14_g68O_i0i0eQ
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 0
            [headers] => Array
                (
                )

            [body] => 
        )

    [client] => Array
        (
            [error] => Could not resolve host: accounts.google.com
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => 
                    [http_code] => 0
                    [header_size] => 0
                    [request_size] => 0
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.000442
                    [namelookup_time] => 0
                    [connect_time] => 0
                    [pretransfer_time] => 0
                    [size_upload] => 0
                    [size_download] => 0
                    [speed_download] => 0
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 0
                    [local_ip] => 
                    [local_port] => 0
                    [http_version] => 0
                    [protocol] => 0
                    [ssl_verifyresult] => 0
                    [scheme] => 
                    [appconnect_time_us] => 0
                    [connect_time_us] => 0
                    [namelookup_time_us] => 0
                    [pretransfer_time_us] => 0
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 0
                    [total_time_us] => 442
                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => grant_type=refresh_token&refresh_token=1%2F%2F0gvOS7V5ncZcTCgYIARAAGBASNwF-L9IrVLZsEkrF-Lm79hP-M5XFo5NW1KmHeFaPmDHNZejUHPryecCN0IsLE14_g68O_i0i0eQ&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

error -- ::1 -- 2021-08-29T15:27:23+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), error:
Array
(
    [0] => Could not resolve host: accounts.google.com
)

debug -- ::1 -- 2021-08-29T15:27:27+00:00 -- Initialize Hybridauth\Provider\Facebook, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=facebook
    [enabled] => 1
    [keys] => Array
        (
            [id] => 278764557384180
            [secret] => 749617d11518f4b15aee193cc68af24e
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:27:27+00:00 -- Hybridauth\Provider\Facebook::authenticate()
debug -- ::1 -- 2021-08-29T15:27:27+00:00 -- Hybridauth\Provider\Facebook::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://www.facebook.com/dialog/oauth?response_type=code&client_id=278764557384180&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dfacebook&scope=email%2C+public_profile&state=HA-27CDIQYST98XEO6FR13JHKLZW0UG4B5PAMVN
)

debug -- ::1 -- 2021-08-29T15:28:04+00:00 -- Initialize Hybridauth\Provider\Facebook, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=facebook
    [enabled] => 1
    [keys] => Array
        (
            [id] => 278764557384180
            [secret] => 749617d11518f4b15aee193cc68af24e
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:28:04+00:00 -- Hybridauth\Provider\Facebook::authenticate()
debug -- ::1 -- 2021-08-29T15:28:04+00:00 -- Hybridauth\Provider\Facebook::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://www.facebook.com/dialog/oauth?response_type=code&client_id=278764557384180&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dfacebook&scope=email%2C+public_profile&state=HA-A1U527W8IHE4LVKPX9FQCD3MYBGNZSO0JR6T
)

debug -- ::1 -- 2021-08-29T15:28:05+00:00 -- Initialize Hybridauth\Provider\Facebook, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=facebook
    [enabled] => 1
    [keys] => Array
        (
            [id] => 278764557384180
            [secret] => 749617d11518f4b15aee193cc68af24e
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:28:05+00:00 -- Hybridauth\Provider\Facebook::authenticate()
debug -- ::1 -- 2021-08-29T15:28:05+00:00 -- Hybridauth\Provider\Facebook::authenticateFinish(), callback url:
Array
(
    [0] => https://localhost/UCapital/assets/php/login.php?provider=facebook&code=AQBs6ZmL24ZdcOpGU3-haol5Rqb1y4_oGzRcNwFyPP_Fkt1x3XgFknkRbQ8LI3DmLNrHK_lnRw_njJR0uTX8PgbEVem2IKszU5VHLlXnRsLpIX9D2K6znrQDkwJ8qeLZnKuMl4-exu08dqjVJu7dKtRB2Ctxl34e5JN_fLYX7qMYj6GbKQfVFU_WhKbmOuylPsAczdAYGy-dQVBhyuDmSQRCfMkX8g4uhtDThBuRn508879pabYWcCJni__BvO00utwsy0UFXIRNnRpTePKGRto1Hep8ZB6Q9zJZMBeKXe7RQHh7E3dcBF17SB79WU9IGBiYaCqGa8-W21r37DKR1yrR&state=HA-A1U527W8IHE4LVKPX9FQCD3MYBGNZSO0JR6T
)

debug -- ::1 -- 2021-08-29T15:28:05+00:00 -- Hybridauth\HttpClient\Curl::request( https://graph.facebook.com/oauth/access_token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://graph.facebook.com/oauth/access_token
            [method] => POST
            [parameters] => Array
                (
                    [client_id] => 278764557384180
                    [client_secret] => 749617d11518f4b15aee193cc68af24e
                    [grant_type] => authorization_code
                    [redirect_uri] => http://localhost/UCapital/assets/php/login.php?provider=facebook
                    [code] => AQBs6ZmL24ZdcOpGU3-haol5Rqb1y4_oGzRcNwFyPP_Fkt1x3XgFknkRbQ8LI3DmLNrHK_lnRw_njJR0uTX8PgbEVem2IKszU5VHLlXnRsLpIX9D2K6znrQDkwJ8qeLZnKuMl4-exu08dqjVJu7dKtRB2Ctxl34e5JN_fLYX7qMYj6GbKQfVFU_WhKbmOuylPsAczdAYGy-dQVBhyuDmSQRCfMkX8g4uhtDThBuRn508879pabYWcCJni__BvO00utwsy0UFXIRNnRpTePKGRto1Hep8ZB6Q9zJZMBeKXe7RQHh7E3dcBF17SB79WU9IGBiYaCqGa8-W21r37DKR1yrR
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 400
            [headers] => Array
                (
                    [vary] => Accept-Encoding
                    [content_type] => application/json; charset=UTF-8
                    [www_authenticate] => OAuth "Facebook Platform" "redirect_uri_mismatch" "URL लोड नहीं कर सकते: इस URL के डोमेन में एप्लिकेशन के डोमेन शामिल नहीं हैं. इस URL को लोड करने में समर्थ होने के लिए, अपने एप्लिकेशन के सभी डोमेन और उप-डोमेन को अपनी एप्लिकेशन सेटिंग में एप्लिकेशन डोमेन फ़ील्ड में जोड़ें."
                    [facebook_api_version] => v4.0
                    [access_control_allow_origin] => *
                    [strict_transport_security] => max-age=15552000; preload
                    [pragma] => no-cache
                    [cache_control] => no-store
                    [expires] => Sat, 01 Jan 2000 00:00:00 GMT
                    [x_fb_request_id] => A0zEjtQbGWyGb00JFezi1nS
                    [x_fb_trace_id] => DO0nlecS7fa
                    [x_fb_rev] => 1004325525
                    [x_fb_debug] => RenbWdHqqP6tvm5LcD4AzjBOtqv7jS6z9PXqP8vjEnUEcLkEGFXo3rnfwd086c2dm57evqB7dp35cPEfynrFAA==
                    [content_length] => 1150
                    [date] => Sun, 29 Aug 2021 15:28:07 GMT
                    [priority] => u=3,i
                    [alt_svc] => h3-29=":443"; ma=3600,h3-27=":443"; ma=3600
                    [proxy_status] => http_request_error; e_clientaddr="AcLYuV-FNPT8kwdGlDO8JejqS8WYEP1KBWpLfP3mzapfy8WF7Bzcr06a3fYztHidHEi_4Sq3r_AuonaI1BX3iQHuzR5UxfYXSSLDHj72ejWP4g"; e_fb_binaryversion="AcJs5gfFtcuFRQeZFjho1NKas_bldj_Eo6u1dPRs7VelN6YZmTpi3j6eOV6bbTSN1NW-mFCEu9pK6yKT8DwKhxniQOMAieppfUQ"; e_upip="AcK90-Sla54al4Lx-3YYgHzVRcbMzxSZlAxg_e-g18_k0_LnKb1kk2jFY7v5FIx3L8QWc7dRxImOKfDoUcMKD1NbxQKBptW55Q"; e_proxy="AcKIJtRpARYSyg86-kU5Ax6DsVNXiyuGM60WzLmb-59rrZ87BNPZzDAg37cJx1iSRt-Ws8yYq953wehT8jg"; e_fb_builduser="AcKAyq3XCnX4yu2XXkFzUrUPMwcIVnepJN1gAorD4oHDEiEEPwcyngxnDRf6mkbQSSU"; e_fb_vipaddr="AcL_AWwBlkoxgXk0v-sTxSNvthURgsWdSPPXo6rA9ZS0PHEu344opz91m8lza0j5fYF-ntJUuUEN0yOn1nnCYjxSf6Q82bZgVg", http_request_error; e_clientaddr="AcLCcoAHYqvhRAfD-U7X6CrtX78OeeZc6QIAtnS1sa4O4J8RFR9y7Gd2K3akoQYuYuaykeNEqWzg5pO4"; e_fb_binaryversion="AcJmtb-YtML_MnhtDvyEdqV62LjyOVw83CIX3R2BHwUj_LvojGWjsdI_YVtAZP0kLS8sKAfqbxb8qoxwoKuHUSc_mTXeeHD0Ca4"; e_upip="AcIsEgf828TK-zyEWfTMJQz5wobNXRz3jMZofDdw_l02cCfHRZTfEQO_RXeQFwZ-yYga7XaZGakTzso0FLKYJCkq_gBhizzFRA"; e_proxy="AcLqHgcw_gCFKaUDPxdJ7N8msetSp07C4UEDYKNkNyfuwLl0zQl92Xu8YwS0UaxVZrgf5WDynUK_4m0"; e_fb_builduser="AcJwZgEzA8w0nXqxBStbgFvIkLG97GwAAQfLj66csDJiWHBKpWLmIqZjGrl_wwecBz0"; e_fb_vipaddr="AcJ4XUMRGXJKAlYwc1u7oW3X-FS3-s5aBI8vKy--DZH1XgTpbNcDM4ePJ0vSOaeIQJppo6MxoyE"
                )

            [body] => {"error":{"message":"URL \u0932\u094b\u0921 \u0928\u0939\u0940\u0902 \u0915\u0930 \u0938\u0915\u0924\u0947: \u0907\u0938 URL \u0915\u0947 \u0921\u094b\u092e\u0947\u0928 \u092e\u0947\u0902 \u090f\u092a\u094d\u0932\u093f\u0915\u0947\u0936\u0928 \u0915\u0947 \u0921\u094b\u092e\u0947\u0928 \u0936\u093e\u092e\u093f\u0932 \u0928\u0939\u0940\u0902 \u0939\u0948\u0902. \u0907\u0938 URL \u0915\u094b \u0932\u094b\u0921 \u0915\u0930\u0928\u0947 \u092e\u0947\u0902 \u0938\u092e\u0930\u094d\u0925 \u0939\u094b\u0928\u0947 \u0915\u0947 \u0932\u093f\u090f, \u0905\u092a\u0928\u0947 \u090f\u092a\u094d\u0932\u093f\u0915\u0947\u0936\u0928 \u0915\u0947 \u0938\u092d\u0940 \u0921\u094b\u092e\u0947\u0928 \u0914\u0930 \u0909\u092a-\u0921\u094b\u092e\u0947\u0928 \u0915\u094b \u0905\u092a\u0928\u0940 \u090f\u092a\u094d\u0932\u093f\u0915\u0947\u0936\u0928 \u0938\u0947\u091f\u093f\u0902\u0917 \u092e\u0947\u0902 \u090f\u092a\u094d\u0932\u093f\u0915\u0947\u0936\u0928 \u0921\u094b\u092e\u0947\u0928 \u092b\u093c\u0940\u0932\u094d\u0921 \u092e\u0947\u0902 \u091c\u094b\u0921\u093c\u0947\u0902.","type":"OAuthException","code":191,"fbtrace_id":"A0zEjtQbGWyGb00JFezi1nS"}}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://graph.facebook.com/oauth/access_token
                    [content_type] => application/json; charset=UTF-8
                    [http_code] => 400
                    [header_size] => 2537
                    [request_size] => 323
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.490793
                    [namelookup_time] => 0.058605
                    [connect_time] => 0.095349
                    [pretransfer_time] => 0.187991
                    [size_upload] => 548
                    [size_download] => 1150
                    [speed_download] => 2346
                    [speed_upload] => 1118
                    [download_content_length] => 1150
                    [upload_content_length] => 548
                    [starttransfer_time] => 0.188002
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 157.240.239.17
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 63316
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 187661
                    [connect_time_us] => 95349
                    [namelookup_time_us] => 58605
                    [pretransfer_time_us] => 187991
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 188002
                    [total_time_us] => 490793
                    [request_header] => POST /oauth/access_token HTTP/2
Host: graph.facebook.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 548
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => client_id=278764557384180&client_secret=749617d11518f4b15aee193cc68af24e&grant_type=authorization_code&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dfacebook&code=AQBs6ZmL24ZdcOpGU3-haol5Rqb1y4_oGzRcNwFyPP_Fkt1x3XgFknkRbQ8LI3DmLNrHK_lnRw_njJR0uTX8PgbEVem2IKszU5VHLlXnRsLpIX9D2K6znrQDkwJ8qeLZnKuMl4-exu08dqjVJu7dKtRB2Ctxl34e5JN_fLYX7qMYj6GbKQfVFU_WhKbmOuylPsAczdAYGy-dQVBhyuDmSQRCfMkX8g4uhtDThBuRn508879pabYWcCJni__BvO00utwsy0UFXIRNnRpTePKGRto1Hep8ZB6Q9zJZMBeKXe7RQHh7E3dcBF17SB79WU9IGBiYaCqGa8-W21r37DKR1yrR
                    [10002] => https://graph.facebook.com/oauth/access_token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T15:33:44+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:33:44+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-29T15:33:44+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [grant_type] => refresh_token
                    [refresh_token] => 1//0gvOS7V5ncZcTCgYIARAAGBASNwF-L9IrVLZsEkrF-Lm79hP-M5XFo5NW1KmHeFaPmDHNZejUHPryecCN0IsLE14_g68O_i0i0eQ
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [date] => Sun, 29 Aug 2021 15:33:46 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM93Lzo-uW-wbFqxAIdNuQmCIJTelldKH6Hxt0f9Rc7Aq9wKv-vGoLU3A6KeWASTvZhn-JvpM4vcdeqVnmW33-unI2syv5gEWJ51oMb-NlJGA15d-K-2D9oT0i-xhAmoRaa3AxEMGuyWp0Z90l9zYNRBiw",
  "expires_in": 3599,
  "scope": "https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email openid",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6IjgxOWQxZTYxNDI5ZGQzZDNjYWVmMTI5YzBhYzJiYWU4YzZkNDZmYmMiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJ2VUR2dmRhYkp4QWJacG9VNGxJVHJ3IiwiaWF0IjoxNjMwMjUxMjI2LCJleHAiOjE2MzAyNTQ4MjZ9.pATIYFr0A0iKOC0vSmGFmP9tXx8KLucff8ApkP5fFz5PtEhOZ8UyRp488j9a0gpZ0RJMroBtCnY3DmNc72V882lYo4kC8YDDgd7mcV6RPSD4gGwYWLjNsI3NZdMfeWHbJZKSrnE7fci1E3x10mRKFAQpjToKzwSSudw7j4wWbRpB3Pv4reEDMpVk2qm4STD_8n9eqX8uJNAPg7B7Wq7iNBQ81WsOQRJV5FgLCACuKViBK-AqTddUneL9-CMJ7OkIQfRmIf5D6Bh7PF88LFt8vXZ8SDvhIZX4NKHQdDxQ4zkITi_rFi_ibyNWQyX2L7dppruk99KT6yB-HWTfU-txNg"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.515555
                    [namelookup_time] => 0.116185
                    [connect_time] => 0.154386
                    [pretransfer_time] => 0.342795
                    [size_upload] => 268
                    [size_download] => 1286
                    [speed_download] => 2497
                    [speed_upload] => 520
                    [download_content_length] => -1
                    [upload_content_length] => 268
                    [starttransfer_time] => 0.342805
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.193.45
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 51777
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 342616
                    [connect_time_us] => 154386
                    [namelookup_time_us] => 116185
                    [pretransfer_time_us] => 342795
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 342805
                    [total_time_us] => 515555
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 268
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => grant_type=refresh_token&refresh_token=1%2F%2F0gvOS7V5ncZcTCgYIARAAGBASNwF-L9IrVLZsEkrF-Lm79hP-M5XFo5NW1KmHeFaPmDHNZejUHPryecCN0IsLE14_g68O_i0i0eQ&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T15:33:45+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM93Lzo-uW-wbFqxAIdNuQmCIJTelldKH6Hxt0f9Rc7Aq9wKv-vGoLU3A6KeWASTvZhn-JvpM4vcdeqVnmW33-unI2syv5gEWJ51oMb-NlJGA15d-K-2D9oT0i-xhAmoRaa3AxEMGuyWp0Z90l9zYNRBiw
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [date] => Sun, 29 Aug 2021 15:33:47 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 442
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.374355
                    [namelookup_time] => 0.052008
                    [connect_time] => 0.086183
                    [pretransfer_time] => 0.228175
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 826
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.373783
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.194.74
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 51778
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 227942
                    [connect_time_us] => 86183
                    [namelookup_time_us] => 52008
                    [pretransfer_time_us] => 228175
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 373783
                    [total_time_us] => 374355
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM93Lzo-uW-wbFqxAIdNuQmCIJTelldKH6Hxt0f9Rc7Aq9wKv-vGoLU3A6KeWASTvZhn-JvpM4vcdeqVnmW33-unI2syv5gEWJ51oMb-NlJGA15d-K-2D9oT0i-xhAmoRaa3AxEMGuyWp0Z90l9zYNRBiw


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM93Lzo-uW-wbFqxAIdNuQmCIJTelldKH6Hxt0f9Rc7Aq9wKv-vGoLU3A6KeWASTvZhn-JvpM4vcdeqVnmW33-unI2syv5gEWJ51oMb-NlJGA15d-K-2D9oT0i-xhAmoRaa3AxEMGuyWp0Z90l9zYNRBiw
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T15:33:55+00:00 -- Initialize Hybridauth\Provider\Facebook, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=facebook
    [enabled] => 1
    [keys] => Array
        (
            [id] => 278764557384180
            [secret] => 749617d11518f4b15aee193cc68af24e
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:33:55+00:00 -- Hybridauth\Provider\Facebook::authenticate()
debug -- ::1 -- 2021-08-29T15:33:55+00:00 -- Hybridauth\Provider\Facebook::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://www.facebook.com/dialog/oauth?response_type=code&client_id=278764557384180&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dfacebook&scope=email%2C+public_profile&state=HA-L8Z9HQCANBG52MS0IJ3DWPVF6EKTROX4Y1U7
)

debug -- ::1 -- 2021-08-29T15:33:56+00:00 -- Initialize Hybridauth\Provider\Facebook, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=facebook
    [enabled] => 1
    [keys] => Array
        (
            [id] => 278764557384180
            [secret] => 749617d11518f4b15aee193cc68af24e
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:33:56+00:00 -- Hybridauth\Provider\Facebook::authenticate()
debug -- ::1 -- 2021-08-29T15:33:56+00:00 -- Hybridauth\Provider\Facebook::authenticateFinish(), callback url:
Array
(
    [0] => https://localhost/UCapital/assets/php/login.php?provider=facebook&code=AQB2f6UDVUo8kNoUDdu6g3coahWEIINf32ujQhmPBD1tniPBy6zpWBb2US-ca3P8pgufW6dgcWoEffubi0Fgivpa9b1oz4zs7KTvxtXRNudpW27zu9Ap0NIjDUik_MVLn7u4hSTVTQv6WhLUDOfBti8gIQUX-wV5oLepdzK8QksGFDAyLGZocE-aa_uMrEI64DCYX7iPJm4hCVQ1wcE7tNsiFWb-juICI0jkFrphmqlkrs88ictHllUOePAVjltV3K7q5MWIprfGGxDRFqim40OvNP76RwS1xpAoVdi9teUK0Os7jINchZ-N7pnsmhQ1UCIrwAw4YJI45BTUkoGc5Fkv&state=HA-L8Z9HQCANBG52MS0IJ3DWPVF6EKTROX4Y1U7
)

debug -- ::1 -- 2021-08-29T15:33:56+00:00 -- Hybridauth\HttpClient\Curl::request( https://graph.facebook.com/oauth/access_token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://graph.facebook.com/oauth/access_token
            [method] => POST
            [parameters] => Array
                (
                    [client_id] => 278764557384180
                    [client_secret] => 749617d11518f4b15aee193cc68af24e
                    [grant_type] => authorization_code
                    [redirect_uri] => http://localhost/UCapital/assets/php/login.php?provider=facebook
                    [code] => AQB2f6UDVUo8kNoUDdu6g3coahWEIINf32ujQhmPBD1tniPBy6zpWBb2US-ca3P8pgufW6dgcWoEffubi0Fgivpa9b1oz4zs7KTvxtXRNudpW27zu9Ap0NIjDUik_MVLn7u4hSTVTQv6WhLUDOfBti8gIQUX-wV5oLepdzK8QksGFDAyLGZocE-aa_uMrEI64DCYX7iPJm4hCVQ1wcE7tNsiFWb-juICI0jkFrphmqlkrs88ictHllUOePAVjltV3K7q5MWIprfGGxDRFqim40OvNP76RwS1xpAoVdi9teUK0Os7jINchZ-N7pnsmhQ1UCIrwAw4YJI45BTUkoGc5Fkv
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 400
            [headers] => Array
                (
                    [vary] => Accept-Encoding
                    [content_type] => application/json; charset=UTF-8
                    [www_authenticate] => OAuth "Facebook Platform" "redirect_uri_mismatch" "URL लोड नहीं कर सकते: इस URL के डोमेन में एप्लिकेशन के डोमेन शामिल नहीं हैं. इस URL को लोड करने में समर्थ होने के लिए, अपने एप्लिकेशन के सभी डोमेन और उप-डोमेन को अपनी एप्लिकेशन सेटिंग में एप्लिकेशन डोमेन फ़ील्ड में जोड़ें."
                    [facebook_api_version] => v4.0
                    [access_control_allow_origin] => *
                    [strict_transport_security] => max-age=15552000; preload
                    [pragma] => no-cache
                    [cache_control] => no-store
                    [expires] => Sat, 01 Jan 2000 00:00:00 GMT
                    [x_fb_request_id] => AyOdbJMHwvzrgFsfzpURzSq
                    [x_fb_trace_id] => CdAjDFUtblh
                    [x_fb_rev] => 1004325525
                    [x_fb_debug] => ld04Tl2Nh/etyFcKj8VGn5mGzSGoQOc+xRJP9PDLZJxx3zpqoSsk6D90aqvxFGFPWc6TmxI+3Qi5Edd+y1/spQ==
                    [content_length] => 1150
                    [date] => Sun, 29 Aug 2021 15:33:58 GMT
                    [priority] => u=3,i
                    [alt_svc] => h3-29=":443"; ma=3600,h3-27=":443"; ma=3600
                    [proxy_status] => http_request_error; e_clientaddr="AcIdQVqDD_NoojbQxaK0HFKYs-7mnYRofxalIr9cYzaUqsiVuGg0fSyjMMzUafC2O87ZRC7-QXm4wMyaQaYZ2R8pnqe_O4G0VmbeutOAxqUj5Q"; e_fb_binaryversion="AcIhH8jIKPnRqWCKouOwmLpfVWecK3ocOqW97LkwPOhOjlXTGVlLTvPuCyc2-y7rXvXd_AZlHCK-q8zjU45HioGn84K0wDotPuI"; e_upip="AcIt6Shk3vU6Sf-fAOgT9sgaEqa3P0ngthjTXCw4112mWpK6ja2zPafP0TfrN_qFRrI4fCks3WWtMno2UtJD7zde1j8VI9ITXg"; e_proxy="AcJWL2NiDOgc8Ajy5XmaKZaK9RtLqVt8G8NRUmItcr4UAnowxeT9AG8cJvUF-evxtRKCjZZ6aaMll-B4KxU"; e_fb_builduser="AcJfFWBdzqHm6baYYz-V4TVAysA5IFKnBLPts3FVtN5YiuFk7CinV7prAqIEAabnVUo"; e_fb_vipaddr="AcLQCdDdkFYzjcdcpn1Mt2wBM8PQLLnU-U8JPA5vcgUY0jrdFGTl8W47ScZd3VNIr2fae51UUgHu4yP9T85CwjoNFGDbSd9i3g", http_request_error; e_clientaddr="AcKQXviZzU222v9Pd_Qyn2yo4hZ5yM94lb8_5QBsVDWYTkHU0XQk1W5J9OfNccEryGvN_5avCQacC7de"; e_fb_binaryversion="AcJBBCvO0Db6aKwY9_8GkIVJtSp69vBOYO1NDHNW24xramNga-e-32vOslepu0uuWh0JMm17gcUUNXK7gEVzkI4CwH23dbIlKJ8"; e_upip="AcJDQxU38v17sE5ImDD4cv4FIjreZWp-Qtp14KDkhyoeBs3bXVIRGqGqhFpVhmoNu9Z_2Djkj0WElawVqxiSpcShTwcvsWX5BA"; e_proxy="AcKI3dRIYJgVcPwp8YOw2twVmJulemr5E4HdMHzsN-GvAkeepWv3hQ-belGPkvcuNnNny-Br5o31YBM"; e_fb_builduser="AcKLIjMzE58LekHR8mxV5zmNRz4EQRrjlc_at8upeE28lr9Kn0lg-SkBQ8iPJrzJ2m0"; e_fb_vipaddr="AcLVWtC3RftgsqYks3j5d6P7konK_4uT6qv4JSICoaXn0PRC_e9XGFBkzG9NQXymSwGWYZx-Hu0"
                )

            [body] => {"error":{"message":"URL \u0932\u094b\u0921 \u0928\u0939\u0940\u0902 \u0915\u0930 \u0938\u0915\u0924\u0947: \u0907\u0938 URL \u0915\u0947 \u0921\u094b\u092e\u0947\u0928 \u092e\u0947\u0902 \u090f\u092a\u094d\u0932\u093f\u0915\u0947\u0936\u0928 \u0915\u0947 \u0921\u094b\u092e\u0947\u0928 \u0936\u093e\u092e\u093f\u0932 \u0928\u0939\u0940\u0902 \u0939\u0948\u0902. \u0907\u0938 URL \u0915\u094b \u0932\u094b\u0921 \u0915\u0930\u0928\u0947 \u092e\u0947\u0902 \u0938\u092e\u0930\u094d\u0925 \u0939\u094b\u0928\u0947 \u0915\u0947 \u0932\u093f\u090f, \u0905\u092a\u0928\u0947 \u090f\u092a\u094d\u0932\u093f\u0915\u0947\u0936\u0928 \u0915\u0947 \u0938\u092d\u0940 \u0921\u094b\u092e\u0947\u0928 \u0914\u0930 \u0909\u092a-\u0921\u094b\u092e\u0947\u0928 \u0915\u094b \u0905\u092a\u0928\u0940 \u090f\u092a\u094d\u0932\u093f\u0915\u0947\u0936\u0928 \u0938\u0947\u091f\u093f\u0902\u0917 \u092e\u0947\u0902 \u090f\u092a\u094d\u0932\u093f\u0915\u0947\u0936\u0928 \u0921\u094b\u092e\u0947\u0928 \u092b\u093c\u0940\u0932\u094d\u0921 \u092e\u0947\u0902 \u091c\u094b\u0921\u093c\u0947\u0902.","type":"OAuthException","code":191,"fbtrace_id":"AyOdbJMHwvzrgFsfzpURzSq"}}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://graph.facebook.com/oauth/access_token
                    [content_type] => application/json; charset=UTF-8
                    [http_code] => 400
                    [header_size] => 2537
                    [request_size] => 323
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.480951
                    [namelookup_time] => 0.046763
                    [connect_time] => 0.095688
                    [pretransfer_time] => 0.176111
                    [size_upload] => 548
                    [size_download] => 1150
                    [speed_download] => 2395
                    [speed_upload] => 1141
                    [download_content_length] => 1150
                    [upload_content_length] => 548
                    [starttransfer_time] => 0.176121
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 157.240.239.17
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 51236
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 175915
                    [connect_time_us] => 95688
                    [namelookup_time_us] => 46763
                    [pretransfer_time_us] => 176111
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 176121
                    [total_time_us] => 480951
                    [request_header] => POST /oauth/access_token HTTP/2
Host: graph.facebook.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 548
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => client_id=278764557384180&client_secret=749617d11518f4b15aee193cc68af24e&grant_type=authorization_code&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dfacebook&code=AQB2f6UDVUo8kNoUDdu6g3coahWEIINf32ujQhmPBD1tniPBy6zpWBb2US-ca3P8pgufW6dgcWoEffubi0Fgivpa9b1oz4zs7KTvxtXRNudpW27zu9Ap0NIjDUik_MVLn7u4hSTVTQv6WhLUDOfBti8gIQUX-wV5oLepdzK8QksGFDAyLGZocE-aa_uMrEI64DCYX7iPJm4hCVQ1wcE7tNsiFWb-juICI0jkFrphmqlkrs88ictHllUOePAVjltV3K7q5MWIprfGGxDRFqim40OvNP76RwS1xpAoVdi9teUK0Os7jINchZ-N7pnsmhQ1UCIrwAw4YJI45BTUkoGc5Fkv
                    [10002] => https://graph.facebook.com/oauth/access_token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T15:34:19+00:00 -- Initialize Hybridauth\Provider\Twitter, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=twitter
    [enabled] => 1
    [keys] => Array
        (
            [key] => 6aDMnlmww4b1bsHUPT4albHm4
            [secret] => 7OiAruAR5AixAPGukJUOyBoyTASygDOw3YLo8DYokn9D7cZSN9
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:34:19+00:00 -- Hybridauth\Provider\Twitter::authenticate()
debug -- ::1 -- 2021-08-29T15:34:20+00:00 -- Hybridauth\HttpClient\Curl::request( https://api.twitter.com/oauth/request_token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://api.twitter.com/oauth/request_token
            [method] => POST
            [parameters] => Array
                (
                    [oauth_callback] => http://localhost/UCapital/assets/php/login.php?provider=twitter
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => OAuth oauth_version="1.0",oauth_nonce="71b2970a172c58dbab6d9cdeac0b532b",oauth_timestamp="1630251259",oauth_consumer_key="6aDMnlmww4b1bsHUPT4albHm4",oauth_callback="http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dtwitter",oauth_signature_method="HMAC-SHA1",oauth_signature="%2BxwRap8vrqA5ab9I2A%2BfNBhsffQ%3D"
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [ml] => S
                    [date] => Sun, 29 Aug 2021 15:34:21 GMT
                    [pragma] => no-cache
                    [server] => tsa_k
                    [status] => 200 OK
                    [expires] => Tue, 31 Mar 1981 05:00:00 GMT
                    [set_cookie] => guest_id=v1%3A163025126192870427; Max-Age=63072000; Expires=Tue, 29 Aug 2023 15:34:21 GMT; Path=/; Domain=.twitter.com; Secure; SameSite=None
                    [content_type] => text/html;charset=utf-8
                    [cache_control] => no-cache, no-store, must-revalidate, pre-check=0, post-check=0
                    [last_modified] => Sun, 29 Aug 2021 15:34:21 GMT
                    [x_transaction] => c98d3caba7434491
                    [content_length] => 121
                    [x_frame_options] => SAMEORIGIN
                    [x_ua_compatible] => IE=edge,chrome=1
                    [x_xss_protection] => 0
                    [x_content_type_options] => nosniff
                    [content_security_policy] => default-src 'none'; connect-src 'self'; font-src https://abs.twimg.com https://abs-0.twimg.com data:; frame-src 'self' twitter:; img-src https://abs.twimg.com https://*.twimg.com https://pbs.twimg.com data:; media-src 'none'; object-src 'none'; script-src https://abs.twimg.com https://abs-0.twimg.com https://twitter.com https://mobile.twitter.com; style-src https://abs.twimg.com https://abs-0.twimg.com; report-uri https://twitter.com/i/csp_report?a=NVQWGYLXFVWG6Z3JNY%3D%3D%3D%3D%3D%3D&ro=false;
                    [x_twitter_response_tags] => BouncerCompliant
                    [strict_transport_security] => max-age=631138519
                    [x_connection_hash] => 670d0ce8086c5d0c4d5c654357764504b81023f873e4efe40cc3b5cd8ceda706
                )

            [body] => oauth_token=CL2hVgAAAAABSjmiAAABe5KMH_k&oauth_token_secret=FaKRotlJH3ZeqBT6X7axqgOlOL8F3ub4&oauth_callback_confirmed=true
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://api.twitter.com/oauth/request_token
                    [content_type] => text/html;charset=utf-8
                    [http_code] => 200
                    [header_size] => 1510
                    [request_size] => 672
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.704855
                    [namelookup_time] => 0.045224
                    [connect_time] => 0.152478
                    [pretransfer_time] => 0.382552
                    [size_upload] => 96
                    [size_download] => 121
                    [speed_download] => 171
                    [speed_upload] => 136
                    [download_content_length] => 121
                    [upload_content_length] => 96
                    [starttransfer_time] => 0.382557
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 104.244.42.130
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 55010
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 382359
                    [connect_time_us] => 152478
                    [namelookup_time_us] => 45224
                    [pretransfer_time_us] => 382552
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 382557
                    [total_time_us] => 704855
                    [request_header] => POST /oauth/request_token HTTP/2
Host: api.twitter.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: OAuth oauth_version="1.0",oauth_nonce="71b2970a172c58dbab6d9cdeac0b532b",oauth_timestamp="1630251259",oauth_consumer_key="6aDMnlmww4b1bsHUPT4albHm4",oauth_callback="http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dtwitter",oauth_signature_method="HMAC-SHA1",oauth_signature="%2BxwRap8vrqA5ab9I2A%2BfNBhsffQ%3D"
Content-Length: 96
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => oauth_callback=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dtwitter
                    [10002] => https://api.twitter.com/oauth/request_token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: OAuth oauth_version="1.0",oauth_nonce="71b2970a172c58dbab6d9cdeac0b532b",oauth_timestamp="1630251259",oauth_consumer_key="6aDMnlmww4b1bsHUPT4albHm4",oauth_callback="http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dtwitter",oauth_signature_method="HMAC-SHA1",oauth_signature="%2BxwRap8vrqA5ab9I2A%2BfNBhsffQ%3D"
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T15:34:20+00:00 -- Hybridauth\Provider\Twitter::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://api.twitter.com/oauth/authenticate?oauth_token=CL2hVgAAAAABSjmiAAABe5KMH_k
)

debug -- ::1 -- 2021-08-29T15:34:21+00:00 -- Initialize Hybridauth\Provider\Twitter, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=twitter
    [enabled] => 1
    [keys] => Array
        (
            [key] => 6aDMnlmww4b1bsHUPT4albHm4
            [secret] => 7OiAruAR5AixAPGukJUOyBoyTASygDOw3YLo8DYokn9D7cZSN9
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:34:21+00:00 -- Hybridauth\Provider\Twitter::authenticate()
debug -- ::1 -- 2021-08-29T15:34:21+00:00 -- Hybridauth\Provider\Twitter::authenticateFinish(), callback url:
Array
(
    [0] => http://localhost/UCapital/assets/php/login.php?provider=twitter&oauth_token=CL2hVgAAAAABSjmiAAABe5KMH_k&oauth_verifier=UH0Py8hFG0UbHuMRN7RMmzt5UWof6l1N
)

debug -- ::1 -- 2021-08-29T15:34:22+00:00 -- Hybridauth\HttpClient\Curl::request( https://api.twitter.com/oauth/access_token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://api.twitter.com/oauth/access_token
            [method] => POST
            [parameters] => Array
                (
                    [oauth_token] => CL2hVgAAAAABSjmiAAABe5KMH_k
                    [oauth_verifier] => UH0Py8hFG0UbHuMRN7RMmzt5UWof6l1N
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => OAuth oauth_version="1.0",oauth_nonce="63f8587da1ae4bc7f43177dc8dfc7b0a",oauth_timestamp="1630251261",oauth_consumer_key="6aDMnlmww4b1bsHUPT4albHm4",oauth_token="CL2hVgAAAAABSjmiAAABe5KMH_k",oauth_verifier="UH0Py8hFG0UbHuMRN7RMmzt5UWof6l1N",oauth_signature_method="HMAC-SHA1",oauth_signature="OP41kb0%2Bt32TNHleVuxMeZMGsFc%3D"
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [ml] => S
                    [att] => 0-JlnxJxAbgzrRnkccT5cDrcojOa8j38bBAwnu6hMq
                    [date] => Sun, 29 Aug 2021 15:34:24 GMT
                    [pragma] => no-cache
                    [server] => tsa_k
                    [status] => 200 OK
                    [expires] => Tue, 31 Mar 1981 05:00:00 GMT
                    [set_cookie] => guest_id=v1%3A163025126451584572; Max-Age=63072000; Expires=Tue, 29 Aug 2023 15:34:24 GMT; Path=/; Domain=.twitter.com; Secure; SameSite=None
                    [content_type] => text/html;charset=utf-8
                    [cache_control] => no-cache, no-store, must-revalidate, pre-check=0, post-check=0
                    [last_modified] => Sun, 29 Aug 2021 15:34:24 GMT
                    [x_transaction] => 531e9f8d0aa76af6
                    [content_length] => 180
                    [x_frame_options] => SAMEORIGIN
                    [x_ua_compatible] => IE=edge,chrome=1
                    [x_xss_protection] => 0
                    [x_content_type_options] => nosniff
                    [content_security_policy] => default-src 'none'; connect-src 'self'; font-src https://abs.twimg.com https://abs-0.twimg.com data:; frame-src 'self' twitter:; img-src https://abs.twimg.com https://*.twimg.com https://pbs.twimg.com data:; media-src 'none'; object-src 'none'; script-src https://abs.twimg.com https://abs-0.twimg.com https://twitter.com https://mobile.twitter.com; style-src https://abs.twimg.com https://abs-0.twimg.com; report-uri https://twitter.com/i/csp_report?a=NVQWGYLXFVWG6Z3JNY%3D%3D%3D%3D%3D%3D&ro=false;
                    [x_twitter_response_tags] => BouncerCompliant
                    [strict_transport_security] => max-age=631138519
                    [x_connection_hash] => a2acc8dc97ff626a40b6d5f0de80b0c085a8322b768c5291be63fc340decc6eb
                )

            [body] => oauth_token=944143998653833221-BKZ7DeyTCD5d9speMhtI9fsIq6lDJ02&oauth_token_secret=j1IK9XfVqPi6zJukzWbJr3BPUzblAXThPHXKZ2WIO9Dma&user_id=944143998653833221&screen_name=AdityaRawat96
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://api.twitter.com/oauth/access_token
                    [content_type] => text/html;charset=utf-8
                    [http_code] => 200
                    [header_size] => 1559
                    [request_size] => 662
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.768206
                    [namelookup_time] => 0.000658
                    [connect_time] => 0.116782
                    [pretransfer_time] => 0.365347
                    [size_upload] => 87
                    [size_download] => 180
                    [speed_download] => 234
                    [speed_upload] => 113
                    [download_content_length] => 180
                    [upload_content_length] => 87
                    [starttransfer_time] => 0.365353
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 104.244.42.130
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 58870
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 365152
                    [connect_time_us] => 116782
                    [namelookup_time_us] => 658
                    [pretransfer_time_us] => 365347
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 365353
                    [total_time_us] => 768206
                    [request_header] => POST /oauth/access_token HTTP/2
Host: api.twitter.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: OAuth oauth_version="1.0",oauth_nonce="63f8587da1ae4bc7f43177dc8dfc7b0a",oauth_timestamp="1630251261",oauth_consumer_key="6aDMnlmww4b1bsHUPT4albHm4",oauth_token="CL2hVgAAAAABSjmiAAABe5KMH_k",oauth_verifier="UH0Py8hFG0UbHuMRN7RMmzt5UWof6l1N",oauth_signature_method="HMAC-SHA1",oauth_signature="OP41kb0%2Bt32TNHleVuxMeZMGsFc%3D"
Content-Length: 87
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => oauth_token=CL2hVgAAAAABSjmiAAABe5KMH_k&oauth_verifier=UH0Py8hFG0UbHuMRN7RMmzt5UWof6l1N
                    [10002] => https://api.twitter.com/oauth/access_token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: OAuth oauth_version="1.0",oauth_nonce="63f8587da1ae4bc7f43177dc8dfc7b0a",oauth_timestamp="1630251261",oauth_consumer_key="6aDMnlmww4b1bsHUPT4albHm4",oauth_token="CL2hVgAAAAABSjmiAAABe5KMH_k",oauth_verifier="UH0Py8hFG0UbHuMRN7RMmzt5UWof6l1N",oauth_signature_method="HMAC-SHA1",oauth_signature="OP41kb0%2Bt32TNHleVuxMeZMGsFc%3D"
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T15:34:24+00:00 -- Hybridauth\HttpClient\Curl::request( https://api.twitter.com/1.1/account/verify_credentials.json?include_email=true, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://api.twitter.com/1.1/account/verify_credentials.json
            [method] => GET
            [parameters] => Array
                (
                    [include_email] => true
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => OAuth oauth_version="1.0",oauth_nonce="60c1787189d98697361b3101711e6436",oauth_timestamp="1630251262",oauth_consumer_key="6aDMnlmww4b1bsHUPT4albHm4",oauth_token="944143998653833221-BKZ7DeyTCD5d9speMhtI9fsIq6lDJ02",oauth_signature_method="HMAC-SHA1",oauth_signature="Cd3MEyuPyLJjq7gXSxK4O67h2Uw%3D"
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [ml] => S
                    [att] => 0-JlnxJxAbgzrRnkccT5cDrcojOa8j38bBAwnu6hMq
                    [date] => Sun, 29 Aug 2021 15:34:25 GMT
                    [pragma] => no-cache
                    [server] => tsa_k
                    [status] => 200 OK
                    [expires] => Tue, 31 Mar 1981 05:00:00 GMT
                    [set_cookie] => guest_id=v1%3A163025126568483170; Max-Age=63072000; Expires=Tue, 29 Aug 2023 15:34:25 GMT; Path=/; Domain=.twitter.com; Secure; SameSite=None
                    [content_type] => application/json;charset=utf-8
                    [cache_control] => no-cache, no-store, must-revalidate, pre-check=0, post-check=0
                    [last_modified] => Sun, 29 Aug 2021 15:34:25 GMT
                    [x_transaction] => c1c410d43512ca07
                    [content_length] => 2278
                    [x_frame_options] => SAMEORIGIN
                    [x_ua_compatible] => IE=edge,chrome=1
                    [x_xss_protection] => 0
                    [x_content_type_options] => nosniff
                    [content_security_policy] => default-src 'none'; connect-src 'self'; font-src https://abs.twimg.com https://abs-0.twimg.com data:; frame-src 'self' twitter:; img-src https://abs.twimg.com https://*.twimg.com https://pbs.twimg.com data:; media-src 'none'; object-src 'none'; script-src https://abs.twimg.com https://abs-0.twimg.com https://twitter.com https://mobile.twitter.com; style-src https://abs.twimg.com https://abs-0.twimg.com; report-uri https://twitter.com/i/csp_report?a=NVQWGYLXFVWG6Z3JNY%3D%3D%3D%3D%3D%3D&ro=false;
                    [x_twitter_response_tags] => BouncerCompliant
                    [strict_transport_security] => max-age=631138519
                    [x_connection_hash] => b695727f949b71e88fbe6d4e5f7f6a5e8b47c9fe19b982a9e122705845ce62ce
                    [x_access_level] => read
                    [x_rate_limit_limit] => 75
                    [x_rate_limit_reset] => 1630252165
                    [content_disposition] => attachment; filename=json.json
                    [x_rate_limit_remaining] => 74
                )

            [body] => {"id":944143998653833221,"id_str":"944143998653833221","name":"Aditya Rawat","screen_name":"AdityaRawat96","location":"Dehradun, India","description":"","url":null,"entities":{"description":{"urls":[]}},"protected":false,"followers_count":4,"friends_count":7,"listed_count":0,"created_at":"Fri Dec 22 09:54:05 +0000 2017","favourites_count":7,"utc_offset":null,"time_zone":null,"geo_enabled":false,"verified":false,"statuses_count":12,"lang":null,"status":{"created_at":"Thu May 20 08:21:30 +0000 2021","id":1395293591363194881,"id_str":"1395293591363194881","text":"@elonmusk Well plaid @elonmusk $BTC","truncated":false,"entities":{"hashtags":[],"symbols":[{"text":"BTC","indices":[31,35]}],"user_mentions":[{"screen_name":"elonmusk","name":"Elon Musk","id":44196397,"id_str":"44196397","indices":[0,9]},{"screen_name":"elonmusk","name":"Elon Musk","id":44196397,"id_str":"44196397","indices":[21,30]}],"urls":[]},"source":"\u003ca href=\"http:\/\/twitter.com\/download\/android\" rel=\"nofollow\"\u003eTwitter for Android\u003c\/a\u003e","in_reply_to_status_id":1395286896842985479,"in_reply_to_status_id_str":"1395286896842985479","in_reply_to_user_id":44196397,"in_reply_to_user_id_str":"44196397","in_reply_to_screen_name":"elonmusk","geo":null,"coordinates":null,"place":null,"contributors":null,"is_quote_status":false,"retweet_count":0,"favorite_count":0,"favorited":false,"retweeted":false,"lang":"en"},"contributors_enabled":false,"is_translator":false,"is_translation_enabled":false,"profile_background_color":"F5F8FA","profile_background_image_url":null,"profile_background_image_url_https":null,"profile_background_tile":false,"profile_image_url":"http:\/\/pbs.twimg.com\/profile_images\/944145209918554112\/lXmX4251_normal.jpg","profile_image_url_https":"https:\/\/pbs.twimg.com\/profile_images\/944145209918554112\/lXmX4251_normal.jpg","profile_link_color":"1DA1F2","profile_sidebar_border_color":"C0DEED","profile_sidebar_fill_color":"DDEEF6","profile_text_color":"333333","profile_use_background_image":true,"has_extended_profile":true,"default_profile":true,"default_profile_image":false,"following":false,"follow_request_sent":false,"notifications":false,"translator_type":"none","withheld_in_countries":[],"suspended":false,"needs_phone_verification":false}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://api.twitter.com/1.1/account/verify_credentials.json?include_email=true
                    [content_type] => application/json;charset=utf-8
                    [http_code] => 200
                    [header_size] => 1178
                    [request_size] => 599
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 1.281832
                    [namelookup_time] => 0.000664
                    [connect_time] => 0.112548
                    [pretransfer_time] => 0.79698
                    [size_upload] => 0
                    [size_download] => 2278
                    [speed_download] => 1778
                    [speed_upload] => 0
                    [download_content_length] => 2278
                    [upload_content_length] => -1
                    [starttransfer_time] => 1.281051
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 104.244.42.130
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 58872
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 796753
                    [connect_time_us] => 112548
                    [namelookup_time_us] => 664
                    [pretransfer_time_us] => 796980
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 1281051
                    [total_time_us] => 1281832
                    [request_header] => GET /1.1/account/verify_credentials.json?include_email=true HTTP/2
Host: api.twitter.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: OAuth oauth_version="1.0",oauth_nonce="60c1787189d98697361b3101711e6436",oauth_timestamp="1630251262",oauth_consumer_key="6aDMnlmww4b1bsHUPT4albHm4",oauth_token="944143998653833221-BKZ7DeyTCD5d9speMhtI9fsIq6lDJ02",oauth_signature_method="HMAC-SHA1",oauth_signature="Cd3MEyuPyLJjq7gXSxK4O67h2Uw%3D"


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://api.twitter.com/1.1/account/verify_credentials.json?include_email=true
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: OAuth oauth_version="1.0",oauth_nonce="60c1787189d98697361b3101711e6436",oauth_timestamp="1630251262",oauth_consumer_key="6aDMnlmww4b1bsHUPT4albHm4",oauth_token="944143998653833221-BKZ7DeyTCD5d9speMhtI9fsIq6lDJ02",oauth_signature_method="HMAC-SHA1",oauth_signature="Cd3MEyuPyLJjq7gXSxK4O67h2Uw%3D"
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T15:34:45+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:34:45+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-29T15:34:46+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM93Lzo-uW-wbFqxAIdNuQmCIJTelldKH6Hxt0f9Rc7Aq9wKv-vGoLU3A6KeWASTvZhn-JvpM4vcdeqVnmW33-unI2syv5gEWJ51oMb-NlJGA15d-K-2D9oT0i-xhAmoRaa3AxEMGuyWp0Z90l9zYNRBiw
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Sun, 29 Aug 2021 15:34:48 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [pragma] => no-cache
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 442
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.329541
                    [namelookup_time] => 0.000773
                    [connect_time] => 0.056557
                    [pretransfer_time] => 0.192018
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 939
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.329352
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.194.74
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 62561
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 191838
                    [connect_time_us] => 56557
                    [namelookup_time_us] => 773
                    [pretransfer_time_us] => 192018
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 329352
                    [total_time_us] => 329541
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM93Lzo-uW-wbFqxAIdNuQmCIJTelldKH6Hxt0f9Rc7Aq9wKv-vGoLU3A6KeWASTvZhn-JvpM4vcdeqVnmW33-unI2syv5gEWJ51oMb-NlJGA15d-K-2D9oT0i-xhAmoRaa3AxEMGuyWp0Z90l9zYNRBiw


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM93Lzo-uW-wbFqxAIdNuQmCIJTelldKH6Hxt0f9Rc7Aq9wKv-vGoLU3A6KeWASTvZhn-JvpM4vcdeqVnmW33-unI2syv5gEWJ51oMb-NlJGA15d-K-2D9oT0i-xhAmoRaa3AxEMGuyWp0Z90l9zYNRBiw
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T15:34:55+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:34:55+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-29T15:34:55+00:00 -- Hybridauth\Provider\Google::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://accounts.google.com/o/oauth2/auth?response_type=code&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&state=HA-2ZPN08X4QTK7GC6L9HJDVSYEFWABU1MI53OR
)

debug -- ::1 -- 2021-08-29T15:35:01+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:35:01+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-29T15:35:01+00:00 -- Hybridauth\Provider\Google::authenticateFinish(), callback url:
Array
(
    [0] => http://localhost/UCapital/assets/php/login.php?provider=google&state=HA-2ZPN08X4QTK7GC6L9HJDVSYEFWABU1MI53OR&code=4%2F0AX4XfWjf8gAl7BF55BlzF_YocKE1mx-T62yw11YEarJRNEZC95M4Ce8yPbrVkdiILH1vJg&scope=email+profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+openid&authuser=0&prompt=consent
)

debug -- ::1 -- 2021-08-29T15:35:02+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                    [grant_type] => authorization_code
                    [redirect_uri] => http://localhost/UCapital/assets/php/login.php?provider=google
                    [code] => 4/0AX4XfWjf8gAl7BF55BlzF_YocKE1mx-T62yw11YEarJRNEZC95M4Ce8yPbrVkdiILH1vJg
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [pragma] => no-cache
                    [date] => Sun, 29 Aug 2021 15:35:03 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM-Uyvs1YaegH3AEDwAOLOGKXqIcWOMssBNMmVBZ201kPegb5UA1PVr7ZvPxKUOU8M_2BqE2tL7xK3pSnYcbPrLuXPkPOZvToChztni1su44pZyVe5meK2xlUdp_ztCw5RDrLs9nZPBa5_Yfet3zEDTU",
  "expires_in": 3599,
  "refresh_token": "1//0gRgaW2aymFLVCgYIARAAGBASNwF-L9IruAjqMPKu16-nhNGL5ZgUkLP0j0jXlxI-vBh40puXALhQW8_BG_BvL3APyH7BUdpJgkc",
  "scope": "https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email openid",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6IjgxOWQxZTYxNDI5ZGQzZDNjYWVmMTI5YzBhYzJiYWU4YzZkNDZmYmMiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTA2MjAwODI0ODQ0NjE1MTUyOTkyIiwiZW1haWwiOiJ2aWNreXJpZGVyLjk2QGdtYWlsLmNvbSIsImVtYWlsX3ZlcmlmaWVkIjp0cnVlLCJhdF9oYXNoIjoiSUdCOUpnbXhnZFduT01ERjI5X2RLdyIsImlhdCI6MTYzMDI1MTMwMywiZXhwIjoxNjMwMjU0OTAzfQ.KrynaWq1YKfCWzum_nLxY-K4iLGpHpEqNRkC0TAqCmBpCVvl0UUfIhgElpkS3sdkY54WQ8CcsVg3XCI5YGKXap_69ePxGOIK_1mxSv8MZ-pCP1e8-dyFrI7WX1HSHbI9OUTfS0TSYU-cMvylRcXtfRPKDXtyA_UsK8bKEgo8YzZDEtwxKiMxYHwKB4vElj_82G35PPHPBRJv4F52aMEhblR8D4gaaj5GMhMpw1razBE72Cl4EVor63sgz6vgL-6Xw3u4N0-57Wti-h4cPAMZ2KDnaa4UJFKIk1om9_a42aeseYfchwgixTujiO73f2qLPc7hhc5fFhAC7dtF7ub2fg"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.358022
                    [namelookup_time] => 0.000582
                    [connect_time] => 0.04672
                    [pretransfer_time] => 0.195838
                    [size_upload] => 326
                    [size_download] => 1404
                    [speed_download] => 3921
                    [speed_upload] => 910
                    [download_content_length] => -1
                    [upload_content_length] => 326
                    [starttransfer_time] => 0.195845
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.193.45
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 49731
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 195676
                    [connect_time_us] => 46720
                    [namelookup_time_us] => 582
                    [pretransfer_time_us] => 195838
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 195845
                    [total_time_us] => 358022
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 326
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY&grant_type=authorization_code&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&code=4%2F0AX4XfWjf8gAl7BF55BlzF_YocKE1mx-T62yw11YEarJRNEZC95M4Ce8yPbrVkdiILH1vJg
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T15:35:02+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-Uyvs1YaegH3AEDwAOLOGKXqIcWOMssBNMmVBZ201kPegb5UA1PVr7ZvPxKUOU8M_2BqE2tL7xK3pSnYcbPrLuXPkPOZvToChztni1su44pZyVe5meK2xlUdp_ztCw5RDrLs9nZPBa5_Yfet3zEDTU
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [pragma] => no-cache
                    [date] => Sun, 29 Aug 2021 15:35:04 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "106200824844615152992",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a-/AOh14GigdsGQHrXcXdv22-jPRzD0nMJfPL1WWItqeKEKZw\u003ds96-c",
  "email": "vickyrider.96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.332462
                    [namelookup_time] => 0.0008
                    [connect_time] => 0.044279
                    [pretransfer_time] => 0.192648
                    [size_upload] => 0
                    [size_download] => 307
                    [speed_download] => 924
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.332277
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.194.74
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 49733
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 192488
                    [connect_time_us] => 44279
                    [namelookup_time_us] => 800
                    [pretransfer_time_us] => 192648
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 332277
                    [total_time_us] => 332462
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-Uyvs1YaegH3AEDwAOLOGKXqIcWOMssBNMmVBZ201kPegb5UA1PVr7ZvPxKUOU8M_2BqE2tL7xK3pSnYcbPrLuXPkPOZvToChztni1su44pZyVe5meK2xlUdp_ztCw5RDrLs9nZPBa5_Yfet3zEDTU


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-Uyvs1YaegH3AEDwAOLOGKXqIcWOMssBNMmVBZ201kPegb5UA1PVr7ZvPxKUOU8M_2BqE2tL7xK3pSnYcbPrLuXPkPOZvToChztni1su44pZyVe5meK2xlUdp_ztCw5RDrLs9nZPBa5_Yfet3zEDTU
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T15:35:08+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:35:08+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-29T15:35:09+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-Uyvs1YaegH3AEDwAOLOGKXqIcWOMssBNMmVBZ201kPegb5UA1PVr7ZvPxKUOU8M_2BqE2tL7xK3pSnYcbPrLuXPkPOZvToChztni1su44pZyVe5meK2xlUdp_ztCw5RDrLs9nZPBa5_Yfet3zEDTU
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Sun, 29 Aug 2021 15:35:11 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [pragma] => no-cache
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "106200824844615152992",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a-/AOh14GigdsGQHrXcXdv22-jPRzD0nMJfPL1WWItqeKEKZw\u003ds96-c",
  "email": "vickyrider.96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.338629
                    [namelookup_time] => 0.000771
                    [connect_time] => 0.064122
                    [pretransfer_time] => 0.198728
                    [size_upload] => 0
                    [size_download] => 307
                    [speed_download] => 908
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.3327
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.194.74
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 58851
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 198569
                    [connect_time_us] => 64122
                    [namelookup_time_us] => 771
                    [pretransfer_time_us] => 198728
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 332700
                    [total_time_us] => 338629
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-Uyvs1YaegH3AEDwAOLOGKXqIcWOMssBNMmVBZ201kPegb5UA1PVr7ZvPxKUOU8M_2BqE2tL7xK3pSnYcbPrLuXPkPOZvToChztni1su44pZyVe5meK2xlUdp_ztCw5RDrLs9nZPBa5_Yfet3zEDTU


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-Uyvs1YaegH3AEDwAOLOGKXqIcWOMssBNMmVBZ201kPegb5UA1PVr7ZvPxKUOU8M_2BqE2tL7xK3pSnYcbPrLuXPkPOZvToChztni1su44pZyVe5meK2xlUdp_ztCw5RDrLs9nZPBa5_Yfet3zEDTU
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-29T15:35:14+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-29T15:35:14+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-29T15:35:14+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-Uyvs1YaegH3AEDwAOLOGKXqIcWOMssBNMmVBZ201kPegb5UA1PVr7ZvPxKUOU8M_2BqE2tL7xK3pSnYcbPrLuXPkPOZvToChztni1su44pZyVe5meK2xlUdp_ztCw5RDrLs9nZPBa5_Yfet3zEDTU
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [date] => Sun, 29 Aug 2021 15:35:16 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "106200824844615152992",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a-/AOh14GigdsGQHrXcXdv22-jPRzD0nMJfPL1WWItqeKEKZw\u003ds96-c",
  "email": "vickyrider.96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.344024
                    [namelookup_time] => 0.000753
                    [connect_time] => 0.075557
                    [pretransfer_time] => 0.204973
                    [size_upload] => 0
                    [size_download] => 307
                    [speed_download] => 892
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.338243
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.194.74
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 60487
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 204823
                    [connect_time_us] => 75557
                    [namelookup_time_us] => 753
                    [pretransfer_time_us] => 204973
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 338243
                    [total_time_us] => 344024
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-Uyvs1YaegH3AEDwAOLOGKXqIcWOMssBNMmVBZ201kPegb5UA1PVr7ZvPxKUOU8M_2BqE2tL7xK3pSnYcbPrLuXPkPOZvToChztni1su44pZyVe5meK2xlUdp_ztCw5RDrLs9nZPBa5_Yfet3zEDTU


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-Uyvs1YaegH3AEDwAOLOGKXqIcWOMssBNMmVBZ201kPegb5UA1PVr7ZvPxKUOU8M_2BqE2tL7xK3pSnYcbPrLuXPkPOZvToChztni1su44pZyVe5meK2xlUdp_ztCw5RDrLs9nZPBa5_Yfet3zEDTU
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-30T17:15:02+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-30T17:15:02+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-30T17:15:02+00:00 -- Hybridauth\Provider\Google::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://accounts.google.com/o/oauth2/auth?response_type=code&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&state=HA-AB43E8N7VUJYKGDFTOS6IHCLWM5QZ192XRP0
)

debug -- ::1 -- 2021-08-30T17:15:06+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-30T17:15:06+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-30T17:15:06+00:00 -- Hybridauth\Provider\Google::authenticateFinish(), callback url:
Array
(
    [0] => http://localhost/UCapital/assets/php/login.php?provider=google&state=HA-AB43E8N7VUJYKGDFTOS6IHCLWM5QZ192XRP0&code=4%2F0AX4XfWi2Cyf_keCIRWkx5Fcp5cjWnusHQBHYp1updofJy1XwhsmzEmjst3v1iWwRuCitDA&scope=email+profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+openid&authuser=1&prompt=consent
)

debug -- ::1 -- 2021-08-30T17:15:07+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                    [grant_type] => authorization_code
                    [redirect_uri] => http://localhost/UCapital/assets/php/login.php?provider=google
                    [code] => 4/0AX4XfWi2Cyf_keCIRWkx5Fcp5cjWnusHQBHYp1updofJy1XwhsmzEmjst3v1iWwRuCitDA
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [date] => Mon, 30 Aug 2021 17:15:07 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM8ykXeN2dReyfx6O1QJZi9gjeH24sIdeDAJE8gdnRMIgMOZKVXMMKc4eC1rZWy9vSr2Ow-ukv3DdIYVM1vkL4C1t_CxUrSaiZK6b-54OAFCNJpEyiD4KAb3q38QEPcRAie9p5ZpdxxtapGg2JpUVFy5",
  "expires_in": 3599,
  "refresh_token": "1//0gxboVDQ8u6-cCgYIARAAGBASNwF-L9Ir7YBCh0OZL8B2USiInv37nW4T0GZCJMfgPMf801ButbzU-CBlgfrIasS6JJsGPSa3MvU",
  "scope": "openid https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6IjgxOWQxZTYxNDI5ZGQzZDNjYWVmMTI5YzBhYzJiYWU4YzZkNDZmYmMiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJ5eVh1c3BPT1JhUks3MExPdnVsel93IiwiaWF0IjoxNjMwMzQzNzA3LCJleHAiOjE2MzAzNDczMDd9.prCLHDnkIgc4pV_D4HEntZMAxgv-d63cW5Tc_Q8Kz5Mf6dCnJdFt9Ff5kwTX7M9MRJBU5fe8wt3kEY2xWPnY8sfzfVZ6srVp2bqLiiWdL0WLRHBBgYXFqwcWGtAMtoVahnILgGwCmtgT_NoXGPI4v9YArQpIaVkL5eVDTow6r42L1gv9ONPJSRTgdh8SK-K0tV3j_t_YCDRF2FOF0lgJMxnU9t0E1q5yDL16KUWEaYQnoseKxsBGRBhtVsb2vP-T_QWDNrVw1MCqAkm37FOUgmo5QoDUKv_bSnlxWLNndXjGCL5_EkDbr8Rgjo4Z9rvP4BbWOHPE6ydotjFH4beueg"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.544188
                    [namelookup_time] => 0.008616
                    [connect_time] => 0.24271
                    [pretransfer_time] => 0.373768
                    [size_upload] => 326
                    [size_download] => 1410
                    [speed_download] => 2591
                    [speed_upload] => 599
                    [download_content_length] => -1
                    [upload_content_length] => 326
                    [starttransfer_time] => 0.373778
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.196.45
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 61227
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 373607
                    [connect_time_us] => 242710
                    [namelookup_time_us] => 8616
                    [pretransfer_time_us] => 373768
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 373778
                    [total_time_us] => 544188
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 326
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY&grant_type=authorization_code&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&code=4%2F0AX4XfWi2Cyf_keCIRWkx5Fcp5cjWnusHQBHYp1updofJy1XwhsmzEmjst3v1iWwRuCitDA
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-30T17:15:07+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM8ykXeN2dReyfx6O1QJZi9gjeH24sIdeDAJE8gdnRMIgMOZKVXMMKc4eC1rZWy9vSr2Ow-ukv3DdIYVM1vkL4C1t_CxUrSaiZK6b-54OAFCNJpEyiD4KAb3q38QEPcRAie9p5ZpdxxtapGg2JpUVFy5
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [date] => Mon, 30 Aug 2021 17:15:07 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.408133
                    [namelookup_time] => 0.051011
                    [connect_time] => 0.094247
                    [pretransfer_time] => 0.247842
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 757
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.396385
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.206.138
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 61228
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 247692
                    [connect_time_us] => 94247
                    [namelookup_time_us] => 51011
                    [pretransfer_time_us] => 247842
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 396385
                    [total_time_us] => 408133
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM8ykXeN2dReyfx6O1QJZi9gjeH24sIdeDAJE8gdnRMIgMOZKVXMMKc4eC1rZWy9vSr2Ow-ukv3DdIYVM1vkL4C1t_CxUrSaiZK6b-54OAFCNJpEyiD4KAb3q38QEPcRAie9p5ZpdxxtapGg2JpUVFy5


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM8ykXeN2dReyfx6O1QJZi9gjeH24sIdeDAJE8gdnRMIgMOZKVXMMKc4eC1rZWy9vSr2Ow-ukv3DdIYVM1vkL4C1t_CxUrSaiZK6b-54OAFCNJpEyiD4KAb3q38QEPcRAie9p5ZpdxxtapGg2JpUVFy5
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-08-30T18:03:37+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-08-30T18:03:37+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-08-30T18:03:38+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM8ykXeN2dReyfx6O1QJZi9gjeH24sIdeDAJE8gdnRMIgMOZKVXMMKc4eC1rZWy9vSr2Ow-ukv3DdIYVM1vkL4C1t_CxUrSaiZK6b-54OAFCNJpEyiD4KAb3q38QEPcRAie9p5ZpdxxtapGg2JpUVFy5
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [pragma] => no-cache
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [date] => Mon, 30 Aug 2021 18:03:37 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.361649
                    [namelookup_time] => 0.041268
                    [connect_time] => 0.078694
                    [pretransfer_time] => 0.222334
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 855
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.361301
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.182.170
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.97.182
                    [local_port] => 49154
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 222189
                    [connect_time_us] => 78694
                    [namelookup_time_us] => 41268
                    [pretransfer_time_us] => 222334
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 361301
                    [total_time_us] => 361649
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM8ykXeN2dReyfx6O1QJZi9gjeH24sIdeDAJE8gdnRMIgMOZKVXMMKc4eC1rZWy9vSr2Ow-ukv3DdIYVM1vkL4C1t_CxUrSaiZK6b-54OAFCNJpEyiD4KAb3q38QEPcRAie9p5ZpdxxtapGg2JpUVFy5


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM8ykXeN2dReyfx6O1QJZi9gjeH24sIdeDAJE8gdnRMIgMOZKVXMMKc4eC1rZWy9vSr2Ow-ukv3DdIYVM1vkL4C1t_CxUrSaiZK6b-54OAFCNJpEyiD4KAb3q38QEPcRAie9p5ZpdxxtapGg2JpUVFy5
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-06T17:00:26+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-06T17:00:26+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-06T17:00:26+00:00 -- Hybridauth\Provider\Google::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://accounts.google.com/o/oauth2/auth?response_type=code&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&state=HA-58WZX4CS3ENRALTH69MV0FOGYDPQK271UBJI
)

debug -- ::1 -- 2021-09-06T17:00:30+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-06T17:00:30+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-06T17:00:30+00:00 -- Hybridauth\Provider\Google::authenticateFinish(), callback url:
Array
(
    [0] => http://localhost/UCapital/assets/php/login.php?provider=google&state=HA-58WZX4CS3ENRALTH69MV0FOGYDPQK271UBJI&code=4%2F0AX4XfWh56g9QCJuVcR4FRLpphQnfZtOn0pPQ6vPD97xKAocbUMPjNzoVy1Txz7Psjwb_kQ&scope=email+profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+openid&authuser=1&prompt=consent
)

debug -- ::1 -- 2021-09-06T17:00:30+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                    [grant_type] => authorization_code
                    [redirect_uri] => http://localhost/UCapital/assets/php/login.php?provider=google
                    [code] => 4/0AX4XfWh56g9QCJuVcR4FRLpphQnfZtOn0pPQ6vPD97xKAocbUMPjNzoVy1Txz7Psjwb_kQ
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [pragma] => no-cache
                    [date] => Mon, 06 Sep 2021 17:00:32 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM99r2JZvIJSqsV1QjOdjyHw0I38uuKpNqMl271IGOM3O3LXGXs2aOV9qnA2WMtVyJZmBeJsNEK24YrfBVwivDJ9bzc8tnFfOf1txl7b_z-2Oy7Xv2hNBeTebKzF35Zv-lqwN7uk1Cqmfk97rXrymav3",
  "expires_in": 3599,
  "refresh_token": "1//0gWHkaAWwtN4CCgYIARAAGBASNwF-L9IrMWL5-Go2WmSZ8mcg4DiQO-mPg3q5XkE_3dt8TqKq4JdxXx87mu386IfxBOyuBBZ6-Ao",
  "scope": "openid https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6Ijk5MWIwNjM2YWFkYTM0MWM1YTA4ZTBkOGYyNDA2OTcyMDY0ZGM4ZWQiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJ1M0stNW5qZGphOWk1YndDQmIyMGV3IiwiaWF0IjoxNjMwOTQ3NjMyLCJleHAiOjE2MzA5NTEyMzJ9.gigISt27Wf76JxRjqiKnWM9Qr2_pto6NrNjCJjv5Yq70KDQ9d8qUn_gOfNgCo7YUFpLnivSj3ENzOtNQl1VBFo0ppbESXXUwmX_8hHf1xycddf1NoAf1YacombcSDUiIIfOGG6P7z1IybY6wCsqV-O13hzRkLJcAPg0IV0xkxlvZoKVrFcsOe6va3sfoWZ22uXelbttORl50nYBJMMf4F3DJMJPQ971-i_2el7RE3gW2L2juzbDdy5lIsZbGvoxiCfBVkPBzxkYp65e2SAwvzNu5cv3rQQK1EA728diYqAXW5E32goCa4oV4duy9LJzsuj8jgMJDAQ6oEV1Bfg3xOw"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.456609
                    [namelookup_time] => 0.01389
                    [connect_time] => 0.092725
                    [pretransfer_time] => 0.257159
                    [size_upload] => 326
                    [size_download] => 1410
                    [speed_download] => 3092
                    [speed_upload] => 714
                    [download_content_length] => -1
                    [upload_content_length] => 326
                    [starttransfer_time] => 0.257166
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.192.141
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.218.182
                    [local_port] => 53173
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 256970
                    [connect_time_us] => 92725
                    [namelookup_time_us] => 13890
                    [pretransfer_time_us] => 257159
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 257166
                    [total_time_us] => 456609
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 326
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY&grant_type=authorization_code&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&code=4%2F0AX4XfWh56g9QCJuVcR4FRLpphQnfZtOn0pPQ6vPD97xKAocbUMPjNzoVy1Txz7Psjwb_kQ
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-06T17:00:31+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM99r2JZvIJSqsV1QjOdjyHw0I38uuKpNqMl271IGOM3O3LXGXs2aOV9qnA2WMtVyJZmBeJsNEK24YrfBVwivDJ9bzc8tnFfOf1txl7b_z-2Oy7Xv2hNBeTebKzF35Zv-lqwN7uk1Cqmfk97rXrymav3
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [pragma] => no-cache
                    [date] => Mon, 06 Sep 2021 17:00:32 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.386226
                    [namelookup_time] => 0.051491
                    [connect_time] => 0.103105
                    [pretransfer_time] => 0.247406
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 800
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.386039
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.195.10
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.218.182
                    [local_port] => 53174
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 247250
                    [connect_time_us] => 103105
                    [namelookup_time_us] => 51491
                    [pretransfer_time_us] => 247406
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 386039
                    [total_time_us] => 386226
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM99r2JZvIJSqsV1QjOdjyHw0I38uuKpNqMl271IGOM3O3LXGXs2aOV9qnA2WMtVyJZmBeJsNEK24YrfBVwivDJ9bzc8tnFfOf1txl7b_z-2Oy7Xv2hNBeTebKzF35Zv-lqwN7uk1Cqmfk97rXrymav3


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM99r2JZvIJSqsV1QjOdjyHw0I38uuKpNqMl271IGOM3O3LXGXs2aOV9qnA2WMtVyJZmBeJsNEK24YrfBVwivDJ9bzc8tnFfOf1txl7b_z-2Oy7Xv2hNBeTebKzF35Zv-lqwN7uk1Cqmfk97rXrymav3
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-06T23:51:40+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-06T23:51:40+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-06T23:51:41+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [grant_type] => refresh_token
                    [refresh_token] => 1//0gWHkaAWwtN4CCgYIARAAGBASNwF-L9IrMWL5-Go2WmSZ8mcg4DiQO-mPg3q5XkE_3dt8TqKq4JdxXx87mu386IfxBOyuBBZ6-Ao
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Mon, 06 Sep 2021 23:51:42 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [pragma] => no-cache
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM8kqkQMjAOZa_kLzs72wc0Nx0jk4VLAs8kEqNI6AK1jDMw4KvycV58NKF1hEyHUD6KwdFHJivico1ddBvHE8uApVvhlFWIIyOzI4MI9EUaTYzsE9hhYsqsEBHxllEOOGrLVdO6waEhiBewLq_0s7LDC7g",
  "expires_in": 3599,
  "scope": "https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email openid",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6Ijk5MWIwNjM2YWFkYTM0MWM1YTA4ZTBkOGYyNDA2OTcyMDY0ZGM4ZWQiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJkVUdfYTFDUUVIbWhNSEd6V3cwd2NBIiwiaWF0IjoxNjMwOTcyMzAyLCJleHAiOjE2MzA5NzU5MDJ9.MJO3FTEzdM5jn9HZ0xPJiskAY0siNHjgUapBABkPQi6v8XmuW4QayAAb0PzQqQ-lStSPzdrcJga1WhsVSZLDN6PzfwTYYG_rExY7a0C_Bo5TmddNtwMPaO4eIZGnLY8P2Vt1YcKd3Ge3fAIi5t1Tjijv91welT6C1pDmDyXiQi6C8-nggSEhFBLDj8DgMQ9RNpEf-MugC2fhhTGWrtlryttCmoMCUfctkXefhbxP-12ayhphC8XH2ZwkQucW1ys_wmVpOz7jj7cQzKDReNx9Q6MydRXot4X0AKh9tIpkxXldWc7U17STOEqu2JC8jwzFViEwSnTALmB5Gk8mfUtCxg"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.465996
                    [namelookup_time] => 0.062618
                    [connect_time] => 0.140907
                    [pretransfer_time] => 0.294857
                    [size_upload] => 268
                    [size_download] => 1286
                    [speed_download] => 2765
                    [speed_upload] => 576
                    [download_content_length] => -1
                    [upload_content_length] => 268
                    [starttransfer_time] => 0.294864
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.192.141
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.218.182
                    [local_port] => 61473
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 294644
                    [connect_time_us] => 140907
                    [namelookup_time_us] => 62618
                    [pretransfer_time_us] => 294857
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 294864
                    [total_time_us] => 465996
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 268
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => grant_type=refresh_token&refresh_token=1%2F%2F0gWHkaAWwtN4CCgYIARAAGBASNwF-L9IrMWL5-Go2WmSZ8mcg4DiQO-mPg3q5XkE_3dt8TqKq4JdxXx87mu386IfxBOyuBBZ6-Ao&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-06T23:51:41+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM8kqkQMjAOZa_kLzs72wc0Nx0jk4VLAs8kEqNI6AK1jDMw4KvycV58NKF1hEyHUD6KwdFHJivico1ddBvHE8uApVvhlFWIIyOzI4MI9EUaTYzsE9hhYsqsEBHxllEOOGrLVdO6waEhiBewLq_0s7LDC7g
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Mon, 06 Sep 2021 23:51:43 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [pragma] => no-cache
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 442
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.397984
                    [namelookup_time] => 0.059741
                    [connect_time] => 0.10434
                    [pretransfer_time] => 0.248453
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 778
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.393885
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.193.234
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.218.182
                    [local_port] => 61477
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 248296
                    [connect_time_us] => 104340
                    [namelookup_time_us] => 59741
                    [pretransfer_time_us] => 248453
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 393885
                    [total_time_us] => 397984
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM8kqkQMjAOZa_kLzs72wc0Nx0jk4VLAs8kEqNI6AK1jDMw4KvycV58NKF1hEyHUD6KwdFHJivico1ddBvHE8uApVvhlFWIIyOzI4MI9EUaTYzsE9hhYsqsEBHxllEOOGrLVdO6waEhiBewLq_0s7LDC7g


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM8kqkQMjAOZa_kLzs72wc0Nx0jk4VLAs8kEqNI6AK1jDMw4KvycV58NKF1hEyHUD6KwdFHJivico1ddBvHE8uApVvhlFWIIyOzI4MI9EUaTYzsE9hhYsqsEBHxllEOOGrLVdO6waEhiBewLq_0s7LDC7g
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-08T08:56:38+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-08T08:56:38+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-08T08:56:38+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [grant_type] => refresh_token
                    [refresh_token] => 1//0gWHkaAWwtN4CCgYIARAAGBASNwF-L9IrMWL5-Go2WmSZ8mcg4DiQO-mPg3q5XkE_3dt8TqKq4JdxXx87mu386IfxBOyuBBZ6-Ao
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Wed, 08 Sep 2021 08:56:38 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM-w15rwlDByIwuEEpCZzUWdi6Y6I4ET3VmHPR-RdFCBbzxtpIq9YPi5pOmo3CcVOkbJb_8OdKj0vua4-s-9wJcNJiO-N6rpFDMRUxmIG6JOCAPfWvwDK7koL3noTY_Vzm_c8UpGM3GtwJICzExIKuPdxQ",
  "expires_in": 3599,
  "scope": "openid https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6Ijk5MWIwNjM2YWFkYTM0MWM1YTA4ZTBkOGYyNDA2OTcyMDY0ZGM4ZWQiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJlUUlCaWxZcHU5elN0c2tOT09kVm5nIiwiaWF0IjoxNjMxMDkxMzk4LCJleHAiOjE2MzEwOTQ5OTh9.byAfxvbhgcKfiQgwdjV-WqmVWj6VMVzNoJPjt5EBi6S-3iVlnP9FT2wVSCGD-H3tkfAzroyZHLLnKYRSEkXXOHgm68veGILPt-35EL0fZ52ZMHaHR7xm4lfaXT3vixtaB2d1NErjVA21sNK8mW31gvfs0kcW_LZFeRwJYiEBTTu3NctJghnDp78OHXl9_MLxVItgGElPU67GGbYAEF-NE4rwr1CoxSdcgPU7szMy2UnSEsGxTVUqq0V8YKACJB5l7k57cC4qDhqU4tOf6Loz0VtKC2-IFpq-W3HGVylRbljcCcJcFq2wN3xHnz7MLwSIpR0NkGE-h27JBFAm47Kxow"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.329394
                    [namelookup_time] => 0.001266
                    [connect_time] => 0.043312
                    [pretransfer_time] => 0.178426
                    [size_upload] => 268
                    [size_download] => 1286
                    [speed_download] => 3908
                    [speed_upload] => 814
                    [download_content_length] => -1
                    [upload_content_length] => 268
                    [starttransfer_time] => 0.178434
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.182.173
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 58088
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 178256
                    [connect_time_us] => 43312
                    [namelookup_time_us] => 1266
                    [pretransfer_time_us] => 178426
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 178434
                    [total_time_us] => 329394
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 268
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => grant_type=refresh_token&refresh_token=1%2F%2F0gWHkaAWwtN4CCgYIARAAGBASNwF-L9IrMWL5-Go2WmSZ8mcg4DiQO-mPg3q5XkE_3dt8TqKq4JdxXx87mu386IfxBOyuBBZ6-Ao&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-08T08:56:38+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-w15rwlDByIwuEEpCZzUWdi6Y6I4ET3VmHPR-RdFCBbzxtpIq9YPi5pOmo3CcVOkbJb_8OdKj0vua4-s-9wJcNJiO-N6rpFDMRUxmIG6JOCAPfWvwDK7koL3noTY_Vzm_c8UpGM3GtwJICzExIKuPdxQ
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Wed, 08 Sep 2021 08:56:38 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 442
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.385735
                    [namelookup_time] => 0.047966
                    [connect_time] => 0.094093
                    [pretransfer_time] => 0.242404
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 802
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.385551
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.206.170
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 51701
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 242229
                    [connect_time_us] => 94093
                    [namelookup_time_us] => 47966
                    [pretransfer_time_us] => 242404
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 385551
                    [total_time_us] => 385735
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-w15rwlDByIwuEEpCZzUWdi6Y6I4ET3VmHPR-RdFCBbzxtpIq9YPi5pOmo3CcVOkbJb_8OdKj0vua4-s-9wJcNJiO-N6rpFDMRUxmIG6JOCAPfWvwDK7koL3noTY_Vzm_c8UpGM3GtwJICzExIKuPdxQ


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-w15rwlDByIwuEEpCZzUWdi6Y6I4ET3VmHPR-RdFCBbzxtpIq9YPi5pOmo3CcVOkbJb_8OdKj0vua4-s-9wJcNJiO-N6rpFDMRUxmIG6JOCAPfWvwDK7koL3noTY_Vzm_c8UpGM3GtwJICzExIKuPdxQ
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-08T10:34:34+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-08T10:34:34+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-08T10:34:34+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [grant_type] => refresh_token
                    [refresh_token] => 1//0gWHkaAWwtN4CCgYIARAAGBASNwF-L9IrMWL5-Go2WmSZ8mcg4DiQO-mPg3q5XkE_3dt8TqKq4JdxXx87mu386IfxBOyuBBZ6-Ao
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Wed, 08 Sep 2021 10:34:35 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM_E8ba_Pv7plZpRb_r7YD_ZucmJIg8nN_I_D4p1CclEs-T4L29MPLASisJJtFLds7WPvGg4QfaWq6vOctLBKwai8zLrqju-Q9YokSvaIANPP4QUxgIX1Bphyxno8V6AGYgfQoHNDJvVAX3jc0uT6cQ-EA",
  "expires_in": 3599,
  "scope": "openid https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6Ijk5MWIwNjM2YWFkYTM0MWM1YTA4ZTBkOGYyNDA2OTcyMDY0ZGM4ZWQiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiIxUUhSNDV0eFlqWXRWek9VWFhfVGFRIiwiaWF0IjoxNjMxMDk3Mjc1LCJleHAiOjE2MzExMDA4NzV9.NPVqQkMsChlYCKq7wSBxeF6vMlgz3xzqewg3zFKUaH2Zf7SEvuGSGSPqyIW6ztKrYa94CsxthP_6_CL5a810eKh_cKOHWiDtdowzeIZQZ-Zm2NNc8MTugE7nz5erKlX_jp3gZpQuRN4J6GuZaY_jcA3iSq7kT_yeNoKqEQ7X2GJvu5j8KXXTmvQ4nKCWh9gjN5s5J5aIoXLbT5kCRFsooqXZlpZh0oBa9Lv295q0l-9shxfkmNaFcXBDaRgusem_eivi7dzkyZ-QvufJCkTx9ARV--siIPYygUxH3DixINK_mxqtIQdTV38G2v80PHXOnHQasggpLBER_A9wze1HGA"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.458858
                    [namelookup_time] => 0.116348
                    [connect_time] => 0.168443
                    [pretransfer_time] => 0.308198
                    [size_upload] => 268
                    [size_download] => 1286
                    [speed_download] => 2807
                    [speed_upload] => 585
                    [download_content_length] => -1
                    [upload_content_length] => 268
                    [starttransfer_time] => 0.308206
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.182.173
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 62191
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 308021
                    [connect_time_us] => 168443
                    [namelookup_time_us] => 116348
                    [pretransfer_time_us] => 308198
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 308206
                    [total_time_us] => 458858
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 268
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => grant_type=refresh_token&refresh_token=1%2F%2F0gWHkaAWwtN4CCgYIARAAGBASNwF-L9IrMWL5-Go2WmSZ8mcg4DiQO-mPg3q5XkE_3dt8TqKq4JdxXx87mu386IfxBOyuBBZ6-Ao&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-08T10:34:35+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM_E8ba_Pv7plZpRb_r7YD_ZucmJIg8nN_I_D4p1CclEs-T4L29MPLASisJJtFLds7WPvGg4QfaWq6vOctLBKwai8zLrqju-Q9YokSvaIANPP4QUxgIX1Bphyxno8V6AGYgfQoHNDJvVAX3jc0uT6cQ-EA
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Wed, 08 Sep 2021 10:34:35 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 442
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.382261
                    [namelookup_time] => 0.044937
                    [connect_time] => 0.091095
                    [pretransfer_time] => 0.226146
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 808
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.382044
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 216.58.196.202
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 62192
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 225886
                    [connect_time_us] => 91095
                    [namelookup_time_us] => 44937
                    [pretransfer_time_us] => 226146
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 382044
                    [total_time_us] => 382261
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM_E8ba_Pv7plZpRb_r7YD_ZucmJIg8nN_I_D4p1CclEs-T4L29MPLASisJJtFLds7WPvGg4QfaWq6vOctLBKwai8zLrqju-Q9YokSvaIANPP4QUxgIX1Bphyxno8V6AGYgfQoHNDJvVAX3jc0uT6cQ-EA


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM_E8ba_Pv7plZpRb_r7YD_ZucmJIg8nN_I_D4p1CclEs-T4L29MPLASisJJtFLds7WPvGg4QfaWq6vOctLBKwai8zLrqju-Q9YokSvaIANPP4QUxgIX1Bphyxno8V6AGYgfQoHNDJvVAX3jc0uT6cQ-EA
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-08T17:12:26+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-08T17:12:26+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-08T17:12:27+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [grant_type] => refresh_token
                    [refresh_token] => 1//0gWHkaAWwtN4CCgYIARAAGBASNwF-L9IrMWL5-Go2WmSZ8mcg4DiQO-mPg3q5XkE_3dt8TqKq4JdxXx87mu386IfxBOyuBBZ6-Ao
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [date] => Wed, 08 Sep 2021 17:12:27 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM_SdWvEjMhIu6lk1DiIDvnLuGjZ0XSiXffKIUvoAuEWWBQ6xOnLBzCebvIndkjhvnK2T_TpWovIf2EYzXAWN639KfFj_1Eu9Wse41_1WUjvlZ2qo-NlbgiF9lPDvHm9S-y5rgHF3reRb6Wl125m982WOg",
  "expires_in": 3599,
  "scope": "https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email openid",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6Ijk5MWIwNjM2YWFkYTM0MWM1YTA4ZTBkOGYyNDA2OTcyMDY0ZGM4ZWQiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJEd0I5bXJYX3ZEQzRCWnAwSWdJZjNRIiwiaWF0IjoxNjMxMTIxMTQ3LCJleHAiOjE2MzExMjQ3NDd9.KekPhBzM7uvuf28KtBsVuN-ZVJ9J3bxznJ7IR8GeX8uHOv-cLBKIx-iyyk3aMcb3BpMpY_jGFB-XcI3b9neJ82UNGeCKmm9u4Bz6XErQ-H0llMr3FN7TvpqO_Sp9pEN6vfaLz_D4rQrJ3E6aAQ21BixYzqS3K8qsDe7rdA8O35LZ_LahQY1ydA9Fa2feN50eCIIfk3hPsxWp2g9xnt4CVM1G2VGnDqIZf_OJP_9VFUdkm8zAGWPgb09LaKyY7N1HWW-Jx8OS0nJn5ffDabGj7A3HBSV11mYBUba3EH0gOTgCbM9WY6ss_hNris8t2QbTX185W9BJvvYnK3-pa4VY5w"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.375019
                    [namelookup_time] => 0.00704
                    [connect_time] => 0.062283
                    [pretransfer_time] => 0.215191
                    [size_upload] => 268
                    [size_download] => 1286
                    [speed_download] => 3429
                    [speed_upload] => 714
                    [download_content_length] => -1
                    [upload_content_length] => 268
                    [starttransfer_time] => 0.215199
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.182.173
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 50571
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 214883
                    [connect_time_us] => 62283
                    [namelookup_time_us] => 7040
                    [pretransfer_time_us] => 215191
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 215199
                    [total_time_us] => 375019
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 268
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => grant_type=refresh_token&refresh_token=1%2F%2F0gWHkaAWwtN4CCgYIARAAGBASNwF-L9IrMWL5-Go2WmSZ8mcg4DiQO-mPg3q5XkE_3dt8TqKq4JdxXx87mu386IfxBOyuBBZ6-Ao&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-08T17:12:27+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM_SdWvEjMhIu6lk1DiIDvnLuGjZ0XSiXffKIUvoAuEWWBQ6xOnLBzCebvIndkjhvnK2T_TpWovIf2EYzXAWN639KfFj_1Eu9Wse41_1WUjvlZ2qo-NlbgiF9lPDvHm9S-y5rgHF3reRb6Wl125m982WOg
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [date] => Wed, 08 Sep 2021 17:12:27 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 442
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.33905
                    [namelookup_time] => 0.016809
                    [connect_time] => 0.078884
                    [pretransfer_time] => 0.204765
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 911
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.338778
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 172.217.167.10
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 50572
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 204578
                    [connect_time_us] => 78884
                    [namelookup_time_us] => 16809
                    [pretransfer_time_us] => 204765
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 338778
                    [total_time_us] => 339050
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM_SdWvEjMhIu6lk1DiIDvnLuGjZ0XSiXffKIUvoAuEWWBQ6xOnLBzCebvIndkjhvnK2T_TpWovIf2EYzXAWN639KfFj_1Eu9Wse41_1WUjvlZ2qo-NlbgiF9lPDvHm9S-y5rgHF3reRb6Wl125m982WOg


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM_SdWvEjMhIu6lk1DiIDvnLuGjZ0XSiXffKIUvoAuEWWBQ6xOnLBzCebvIndkjhvnK2T_TpWovIf2EYzXAWN639KfFj_1Eu9Wse41_1WUjvlZ2qo-NlbgiF9lPDvHm9S-y5rgHF3reRb6Wl125m982WOg
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-08T18:43:22+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-08T18:43:22+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-08T18:43:22+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [grant_type] => refresh_token
                    [refresh_token] => 1//0gWHkaAWwtN4CCgYIARAAGBASNwF-L9IrMWL5-Go2WmSZ8mcg4DiQO-mPg3q5XkE_3dt8TqKq4JdxXx87mu386IfxBOyuBBZ6-Ao
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [date] => Wed, 08 Sep 2021 18:43:22 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM_R1fIW07Ala9GN5FwPWZg6IUiT0yfalur4JzpgA63CPon8-wv0OfXhJgGZMeZKa3gMRNiMTiw0c7_OvUsAzkO4O2nuBucgXrj9aeGKSA-Uub4ln0JZMJzG7gn21u0ixZff32lsO88zckiuBKpoLHRBuA",
  "expires_in": 3599,
  "scope": "openid https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6Ijk5MWIwNjM2YWFkYTM0MWM1YTA4ZTBkOGYyNDA2OTcyMDY0ZGM4ZWQiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJDQ1NFYWJZZmFrUm0tbDFFbjJyb2FBIiwiaWF0IjoxNjMxMTI2NjAyLCJleHAiOjE2MzExMzAyMDJ9.douczPnzGTLYdqzC9WnzpaXpWmklVckaIpkE5JaewczlTlubOERIOVjGEWMS1vEdvpx1i_1dKFAjCttNzjgSsknItDdDLk5uKYQwvJJKvZi-JMM1mgxKIR66hrc3hXx853OM2et5QxvScQyb1fB6bpZ-CItyQhv3C7_7kDhDbdNza-d4dCB2l1g9_3Hl49emahFwzPcqUqD1VkkgVYirwnjla33r2-u1oZZH77AqMICvO2lzjMdG4jcznFgjK1WATgJa644Gazp6hFq5Ocw9mQNzEmjiqnV1gBRFQb5CrJBA93JE2uZaHKSAx2XRJzv1MPAmV5RWfI-NLsSExr7nSA"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.390115
                    [namelookup_time] => 0.020292
                    [connect_time] => 0.066597
                    [pretransfer_time] => 0.223064
                    [size_upload] => 268
                    [size_download] => 1286
                    [speed_download] => 3297
                    [speed_upload] => 687
                    [download_content_length] => -1
                    [upload_content_length] => 268
                    [starttransfer_time] => 0.223074
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 172.217.167.237
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 61903
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 222817
                    [connect_time_us] => 66597
                    [namelookup_time_us] => 20292
                    [pretransfer_time_us] => 223064
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 223074
                    [total_time_us] => 390115
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 268
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => grant_type=refresh_token&refresh_token=1%2F%2F0gWHkaAWwtN4CCgYIARAAGBASNwF-L9IrMWL5-Go2WmSZ8mcg4DiQO-mPg3q5XkE_3dt8TqKq4JdxXx87mu386IfxBOyuBBZ6-Ao&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-08T18:43:22+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM_R1fIW07Ala9GN5FwPWZg6IUiT0yfalur4JzpgA63CPon8-wv0OfXhJgGZMeZKa3gMRNiMTiw0c7_OvUsAzkO4O2nuBucgXrj9aeGKSA-Uub4ln0JZMJzG7gn21u0ixZff32lsO88zckiuBKpoLHRBuA
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [date] => Wed, 08 Sep 2021 18:43:23 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 442
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.40743
                    [namelookup_time] => 0.061795
                    [connect_time] => 0.106248
                    [pretransfer_time] => 0.25479
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 759
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.405966
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.193.234
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 61904
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 254635
                    [connect_time_us] => 106248
                    [namelookup_time_us] => 61795
                    [pretransfer_time_us] => 254790
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 405966
                    [total_time_us] => 407430
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM_R1fIW07Ala9GN5FwPWZg6IUiT0yfalur4JzpgA63CPon8-wv0OfXhJgGZMeZKa3gMRNiMTiw0c7_OvUsAzkO4O2nuBucgXrj9aeGKSA-Uub4ln0JZMJzG7gn21u0ixZff32lsO88zckiuBKpoLHRBuA


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM_R1fIW07Ala9GN5FwPWZg6IUiT0yfalur4JzpgA63CPon8-wv0OfXhJgGZMeZKa3gMRNiMTiw0c7_OvUsAzkO4O2nuBucgXrj9aeGKSA-Uub4ln0JZMJzG7gn21u0ixZff32lsO88zckiuBKpoLHRBuA
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-10T09:06:04+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-10T09:06:04+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-10T09:06:04+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [grant_type] => refresh_token
                    [refresh_token] => 1//0gWHkaAWwtN4CCgYIARAAGBASNwF-L9IrMWL5-Go2WmSZ8mcg4DiQO-mPg3q5XkE_3dt8TqKq4JdxXx87mu386IfxBOyuBBZ6-Ao
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [date] => Fri, 10 Sep 2021 09:06:07 GMT
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM9NSNAJovtrHxMze0DzTG7-jMP0_1-I18qBWUrMSDCJUAfSMBlq7bqf9evUxQ4T0SYzqFukBSz_FWe8V4yixAXyZYv-MnFn24M9ineBzUKuxwKU1aji3DkEP7RvLr_urMWzvxgbHWpL0Il7V_KClwbtUw",
  "expires_in": 3599,
  "scope": "openid https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6Ijk5MWIwNjM2YWFkYTM0MWM1YTA4ZTBkOGYyNDA2OTcyMDY0ZGM4ZWQiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJid1JQNDJQSC03SGl0cTdlcUVjazZBIiwiaWF0IjoxNjMxMjY0NzY3LCJleHAiOjE2MzEyNjgzNjd9.U3bsAxN4lxWU0bpo9YzF4hQknnIpDN-KoghxIHu4l-nPFGeQUlxWLJqEhxUDKCxRkDLRKB0eg3jPhUa7rHEwhLzOReWdrgW5r-hXudQA_5x5YHbsvLHMogJ0WxWn3h2i31dpI7aXhrmkel3tdQbBifhXjHaYRZktymCPXFyc20HTV7FRoM5xfIZK06laWRtckHhd1JFL07p4e5Zleght3aN6o4fECd1La_v4z00iul0EW1cWZ-NDiez0VhLAK7vX5K9GA-NG8wQ045q3BWQJP_hhL-3Lmx4gc1ydPmP8Bh3CFBRiio0k3Z1uNO8GesuYgk2FKOFUsrlORCPZBSUwkg"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.444811
                    [namelookup_time] => 0.060043
                    [connect_time] => 0.109391
                    [pretransfer_time] => 0.274719
                    [size_upload] => 268
                    [size_download] => 1286
                    [speed_download] => 2896
                    [speed_upload] => 603
                    [download_content_length] => -1
                    [upload_content_length] => 268
                    [starttransfer_time] => 0.274736
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 216.58.200.173
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 59658
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 274420
                    [connect_time_us] => 109391
                    [namelookup_time_us] => 60043
                    [pretransfer_time_us] => 274719
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 274736
                    [total_time_us] => 444811
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 268
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => grant_type=refresh_token&refresh_token=1%2F%2F0gWHkaAWwtN4CCgYIARAAGBASNwF-L9IrMWL5-Go2WmSZ8mcg4DiQO-mPg3q5XkE_3dt8TqKq4JdxXx87mu386IfxBOyuBBZ6-Ao&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-10T09:06:05+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM9NSNAJovtrHxMze0DzTG7-jMP0_1-I18qBWUrMSDCJUAfSMBlq7bqf9evUxQ4T0SYzqFukBSz_FWe8V4yixAXyZYv-MnFn24M9ineBzUKuxwKU1aji3DkEP7RvLr_urMWzvxgbHWpL0Il7V_KClwbtUw
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [date] => Fri, 10 Sep 2021 09:06:07 GMT
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 442
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.454539
                    [namelookup_time] => 0.064346
                    [connect_time] => 0.130929
                    [pretransfer_time] => 0.287758
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 680
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.454345
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.183.138
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 59660
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 285827
                    [connect_time_us] => 130929
                    [namelookup_time_us] => 64346
                    [pretransfer_time_us] => 287758
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 454345
                    [total_time_us] => 454539
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM9NSNAJovtrHxMze0DzTG7-jMP0_1-I18qBWUrMSDCJUAfSMBlq7bqf9evUxQ4T0SYzqFukBSz_FWe8V4yixAXyZYv-MnFn24M9ineBzUKuxwKU1aji3DkEP7RvLr_urMWzvxgbHWpL0Il7V_KClwbtUw


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM9NSNAJovtrHxMze0DzTG7-jMP0_1-I18qBWUrMSDCJUAfSMBlq7bqf9evUxQ4T0SYzqFukBSz_FWe8V4yixAXyZYv-MnFn24M9ineBzUKuxwKU1aji3DkEP7RvLr_urMWzvxgbHWpL0Il7V_KClwbtUw
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-10T09:20:23+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-10T09:20:23+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-10T09:20:23+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM9NSNAJovtrHxMze0DzTG7-jMP0_1-I18qBWUrMSDCJUAfSMBlq7bqf9evUxQ4T0SYzqFukBSz_FWe8V4yixAXyZYv-MnFn24M9ineBzUKuxwKU1aji3DkEP7RvLr_urMWzvxgbHWpL0Il7V_KClwbtUw
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [date] => Fri, 10 Sep 2021 09:20:26 GMT
                    [pragma] => no-cache
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 442
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.481896
                    [namelookup_time] => 0.11627
                    [connect_time] => 0.168519
                    [pretransfer_time] => 0.340557
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 642
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.481662
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 172.217.167.202
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 58376
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 337940
                    [connect_time_us] => 168519
                    [namelookup_time_us] => 116270
                    [pretransfer_time_us] => 340557
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 481662
                    [total_time_us] => 481896
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM9NSNAJovtrHxMze0DzTG7-jMP0_1-I18qBWUrMSDCJUAfSMBlq7bqf9evUxQ4T0SYzqFukBSz_FWe8V4yixAXyZYv-MnFn24M9ineBzUKuxwKU1aji3DkEP7RvLr_urMWzvxgbHWpL0Il7V_KClwbtUw


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM9NSNAJovtrHxMze0DzTG7-jMP0_1-I18qBWUrMSDCJUAfSMBlq7bqf9evUxQ4T0SYzqFukBSz_FWe8V4yixAXyZYv-MnFn24M9ineBzUKuxwKU1aji3DkEP7RvLr_urMWzvxgbHWpL0Il7V_KClwbtUw
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-12T16:05:37+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-12T16:05:37+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-12T16:05:37+00:00 -- Hybridauth\Provider\Google::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://accounts.google.com/o/oauth2/auth?response_type=code&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&state=HA-ZHP4MRSXEU76GB3NTWFJ285LQKYD9V1C0AIO
)

debug -- ::1 -- 2021-09-12T16:05:43+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-12T16:05:43+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-12T16:05:43+00:00 -- Hybridauth\Provider\Google::authenticateFinish(), callback url:
Array
(
    [0] => http://localhost/UCapital/assets/php/login.php?provider=google&state=HA-ZHP4MRSXEU76GB3NTWFJ285LQKYD9V1C0AIO&code=4%2F0AX4XfWiJd-oA94Wyc30Nhkic9w8jVJsbFxZ-vmT30AULCaWK8SYvPqrHU4ZaSc4sm2i1pg&scope=email+profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+openid&authuser=1&prompt=consent
)

debug -- ::1 -- 2021-09-12T16:05:43+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                    [grant_type] => authorization_code
                    [redirect_uri] => http://localhost/UCapital/assets/php/login.php?provider=google
                    [code] => 4/0AX4XfWiJd-oA94Wyc30Nhkic9w8jVJsbFxZ-vmT30AULCaWK8SYvPqrHU4ZaSc4sm2i1pg
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [pragma] => no-cache
                    [date] => Sun, 12 Sep 2021 16:05:43 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM9aeLkbNhJyQ-3gJXxnO-fgZLRwLnG9FsW07nFeRDmMkQU_jS57S1K-0_0bIXt1AayqZXQVmwHDsiHvRfNddz5v04q34ldZWx9fGQp7feg5M5-2Yxh9Iuzijhxsj7xaL398lg3thweh1xNSUaAnaWkJ",
  "expires_in": 3599,
  "refresh_token": "1//0gd-KDTHQa6DuCgYIARAAGBASNwF-L9IrEhEqq6m9ZPvIgs15PSsGJJrsrG0QY0a8wvM50FsnMINsgoebydq-EvlUgMSOB3THA6w",
  "scope": "openid https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6Ijk5MWIwNjM2YWFkYTM0MWM1YTA4ZTBkOGYyNDA2OTcyMDY0ZGM4ZWQiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiI3T2x5TEZmdlo3VzdacUJ2ck9UZ0V3IiwiaWF0IjoxNjMxNDYyNzQzLCJleHAiOjE2MzE0NjYzNDN9.YXOD9RGG8Zyq4ewYO1ci8nOWlBWIh7CpG9bbNcVIouhlAo5xgTaWmBW1VlMhSutoQZHfzdAeOp9IWdcVqHqYqDRLPxDFkvra2_8QFZZtSCB18c5rcCeqLv_uS4ytSX4YaTGNzY3vgvNfMatx8EuqthvHXGEn3XBHnm3wqNyK3huJI38ZIeSgsBqUkb-DHe4PLVZRE3YyoDxGyjy1xrHSkLH6Km0AXSNUowiOaWi2wxkBpps_44yjLK-ef_XzcVRWVMbIvS5lkUfTduQplJwsvk9QscLmUEUMKcsUPPPKRTUKrVO1d63vcF8d3N85tLb1Db_5FZYUtrtWjXUxQ26h9g"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.511802
                    [namelookup_time] => 0.022797
                    [connect_time] => 0.069924
                    [pretransfer_time] => 0.32718
                    [size_upload] => 326
                    [size_download] => 1410
                    [speed_download] => 2759
                    [speed_upload] => 637
                    [download_content_length] => -1
                    [upload_content_length] => 326
                    [starttransfer_time] => 0.327191
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.206.109
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.51.182
                    [local_port] => 49606
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 322616
                    [connect_time_us] => 69924
                    [namelookup_time_us] => 22797
                    [pretransfer_time_us] => 327180
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 327191
                    [total_time_us] => 511802
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 326
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY&grant_type=authorization_code&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&code=4%2F0AX4XfWiJd-oA94Wyc30Nhkic9w8jVJsbFxZ-vmT30AULCaWK8SYvPqrHU4ZaSc4sm2i1pg
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-12T16:05:44+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM9aeLkbNhJyQ-3gJXxnO-fgZLRwLnG9FsW07nFeRDmMkQU_jS57S1K-0_0bIXt1AayqZXQVmwHDsiHvRfNddz5v04q34ldZWx9fGQp7feg5M5-2Yxh9Iuzijhxsj7xaL398lg3thweh1xNSUaAnaWkJ
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [pragma] => no-cache
                    [date] => Sun, 12 Sep 2021 16:05:43 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.425489
                    [namelookup_time] => 0.049314
                    [connect_time] => 0.107687
                    [pretransfer_time] => 0.262151
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 727
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.420011
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.193.202
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.51.182
                    [local_port] => 49607
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 261978
                    [connect_time_us] => 107687
                    [namelookup_time_us] => 49314
                    [pretransfer_time_us] => 262151
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 420011
                    [total_time_us] => 425489
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM9aeLkbNhJyQ-3gJXxnO-fgZLRwLnG9FsW07nFeRDmMkQU_jS57S1K-0_0bIXt1AayqZXQVmwHDsiHvRfNddz5v04q34ldZWx9fGQp7feg5M5-2Yxh9Iuzijhxsj7xaL398lg3thweh1xNSUaAnaWkJ


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM9aeLkbNhJyQ-3gJXxnO-fgZLRwLnG9FsW07nFeRDmMkQU_jS57S1K-0_0bIXt1AayqZXQVmwHDsiHvRfNddz5v04q34ldZWx9fGQp7feg5M5-2Yxh9Iuzijhxsj7xaL398lg3thweh1xNSUaAnaWkJ
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-16T11:35:20+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-16T11:35:20+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-16T11:35:20+00:00 -- Hybridauth\Provider\Google::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://accounts.google.com/o/oauth2/auth?response_type=code&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&state=HA-2A96NJSC3OGE15M4LRHZ7QIB8WXKDTVYF0PU
)

debug -- ::1 -- 2021-09-16T11:35:24+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-16T11:35:24+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-16T11:35:24+00:00 -- Hybridauth\Provider\Google::authenticateFinish(), callback url:
Array
(
    [0] => http://localhost/UCapital/assets/php/login.php?provider=google&state=HA-2A96NJSC3OGE15M4LRHZ7QIB8WXKDTVYF0PU&code=4%2F0AX4XfWjOe7x522O3eicwd3XG_Tx-wDerVYpgLOgFCJDjJ0gsxW_nwBHLKl4fEHsEwq7Omg&scope=email+profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+openid&authuser=1&prompt=consent
)

debug -- ::1 -- 2021-09-16T11:35:24+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                    [grant_type] => authorization_code
                    [redirect_uri] => http://localhost/UCapital/assets/php/login.php?provider=google
                    [code] => 4/0AX4XfWjOe7x522O3eicwd3XG_Tx-wDerVYpgLOgFCJDjJ0gsxW_nwBHLKl4fEHsEwq7Omg
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Thu, 16 Sep 2021 11:35:24 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [pragma] => no-cache
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM-uO0TkDQ1YguNCljqIr_BAIssstD8TeNETBKNXhO2yRECs4EOliMJCviV0mBl4_o0-tUa0lvTVNeZ4lqbYlMrNVPLoI5KRkTawMUn2yS9H5b0yizdtO-HvdVBp4kuXn6UTFhfYogj3DREdQnelbcA-",
  "expires_in": 3599,
  "refresh_token": "1//0gYV0xLKLwmBjCgYIARAAGBASNwF-L9IrlLFWuq6pvQDnT-pAuQ3sN3o2gftkvrSABpavZpF8F4ba2C7RjHq7CUJ57MJBrPaQTkY",
  "scope": "https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email openid",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6Ijc0MjE3YjhkYWRiYjM2NTc4MzU4MGY5ZTkyNDg3ZDcwMWNkMzhmZTYiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJSLUxjLUpwRzF6RGhUaXJfMF9qeVBRIiwiaWF0IjoxNjMxNzkyMTI0LCJleHAiOjE2MzE3OTU3MjR9.XgUcXtdToUpuEvjUiN1MPYJRJgfJF8MDp2oxsr2ZB903vt2JuOUlBdPL5uO9Rhf3erKoJ5_YzbczHEdCyZml8nRKh0m7de4YMWcFbKn1X1Ed-RBV_qGtCkTGhVof9KNSK7R_GmOw43W_qd2LnUHS05dBuHTh7gYm5qBUv-uAk9i7R09saZwPqoVDZDQPzl1Cl8a_pqpXy-XCWjUcEESs55nNN2VM5WJqdrg4K-ZtSKjBbjPSLrgH_wNM7kBmp87og6xysWKPbmUTl4U9XPuWzymUUtEH0tI2wxXH6ps80qbsjSDxdb97OHVln0G5Nu95TAsQId3wjP3M8IEMLI1Dzw"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.37228
                    [namelookup_time] => 0.00868
                    [connect_time] => 0.064096
                    [pretransfer_time] => 0.213592
                    [size_upload] => 326
                    [size_download] => 1410
                    [speed_download] => 3790
                    [speed_upload] => 876
                    [download_content_length] => -1
                    [upload_content_length] => 326
                    [starttransfer_time] => 0.213635
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.192.205
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.117.182
                    [local_port] => 53913
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 213177
                    [connect_time_us] => 64096
                    [namelookup_time_us] => 8680
                    [pretransfer_time_us] => 213592
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 213635
                    [total_time_us] => 372280
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 326
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY&grant_type=authorization_code&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&code=4%2F0AX4XfWjOe7x522O3eicwd3XG_Tx-wDerVYpgLOgFCJDjJ0gsxW_nwBHLKl4fEHsEwq7Omg
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-16T11:35:25+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-uO0TkDQ1YguNCljqIr_BAIssstD8TeNETBKNXhO2yRECs4EOliMJCviV0mBl4_o0-tUa0lvTVNeZ4lqbYlMrNVPLoI5KRkTawMUn2yS9H5b0yizdtO-HvdVBp4kuXn6UTFhfYogj3DREdQnelbcA-
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Thu, 16 Sep 2021 11:35:24 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [pragma] => no-cache
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.453273
                    [namelookup_time] => 0.006033
                    [connect_time] => 0.04657
                    [pretransfer_time] => 0.229026
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 682
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.379886
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.207.202
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.117.182
                    [local_port] => 53914
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 228883
                    [connect_time_us] => 46570
                    [namelookup_time_us] => 6033
                    [pretransfer_time_us] => 229026
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 379886
                    [total_time_us] => 453273
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-uO0TkDQ1YguNCljqIr_BAIssstD8TeNETBKNXhO2yRECs4EOliMJCviV0mBl4_o0-tUa0lvTVNeZ4lqbYlMrNVPLoI5KRkTawMUn2yS9H5b0yizdtO-HvdVBp4kuXn6UTFhfYogj3DREdQnelbcA-


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-uO0TkDQ1YguNCljqIr_BAIssstD8TeNETBKNXhO2yRECs4EOliMJCviV0mBl4_o0-tUa0lvTVNeZ4lqbYlMrNVPLoI5KRkTawMUn2yS9H5b0yizdtO-HvdVBp4kuXn6UTFhfYogj3DREdQnelbcA-
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-16T18:18:23+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-16T18:18:23+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-16T18:18:23+00:00 -- Hybridauth\Provider\Google::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://accounts.google.com/o/oauth2/auth?response_type=code&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&state=HA-O20VLP5NWKE6XIM14J978THQ3BRZFSUAYDGC
)

debug -- ::1 -- 2021-09-16T18:18:27+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-16T18:18:27+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-16T18:18:27+00:00 -- Hybridauth\Provider\Google::authenticateFinish(), callback url:
Array
(
    [0] => http://localhost/UCapital/assets/php/login.php?provider=google&state=HA-O20VLP5NWKE6XIM14J978THQ3BRZFSUAYDGC&code=4%2F0AX4XfWhcrSkULunyurNzNZuV5L56aAZSz4zLCg2_mYSF6fVjv4jjRqq1KURu_tfPPOabcA&scope=email+profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+openid&authuser=1&prompt=consent
)

debug -- ::1 -- 2021-09-16T18:18:28+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                    [grant_type] => authorization_code
                    [redirect_uri] => http://localhost/UCapital/assets/php/login.php?provider=google
                    [code] => 4/0AX4XfWhcrSkULunyurNzNZuV5L56aAZSz4zLCg2_mYSF6fVjv4jjRqq1KURu_tfPPOabcA
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [date] => Thu, 16 Sep 2021 18:18:28 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ",
  "expires_in": 3599,
  "refresh_token": "1//0gUO_49DinnqDCgYIARAAGBASNwF-L9Irk1KELmnJ4g7JrglIh8Q_am79d0AiR85QfYdwYb-W3eOB3xO_fXtrc93jCrLe_rqtgss",
  "scope": "openid https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6Ijc0MjE3YjhkYWRiYjM2NTc4MzU4MGY5ZTkyNDg3ZDcwMWNkMzhmZTYiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiI1YzRwSkU0MEVfd2k1aTBqalZuT1JRIiwiaWF0IjoxNjMxODE2MzA4LCJleHAiOjE2MzE4MTk5MDh9.X2LfGkWQOmpg0YT5qLX_oZVFx5XnbfwPa9XKSFhPhVwsDAFhzpOxLxUmUViS23DxCEoOAYyfK2WYa8R6pjPT5m315y3qCYl5ennHshX_5UrW8qYaRSQkExu1YTohl0fFiyJONuuJa7xUSEfKdumgw4qOS2ZJtYvO9OGmCFn68zjCRsIvzos_nq8ixtBP_BYzrecqTmkySijm1tZ5E3eU79u7b7WMprpV_xl9w6HOYP9vehbIfDDbx-PlJbCnNlO5dm02SX3jC_pdme1YdNd-8lD4OBlSGA9z8JTG0rjRdKDdH-TZtZoovg5zfS3d0DmFI4Ftw8oM415y20NzyHU7kg"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.418176
                    [namelookup_time] => 0.010436
                    [connect_time] => 0.072574
                    [pretransfer_time] => 0.245097
                    [size_upload] => 326
                    [size_download] => 1410
                    [speed_download] => 3373
                    [speed_upload] => 779
                    [download_content_length] => -1
                    [upload_content_length] => 326
                    [starttransfer_time] => 0.245104
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.251.42.45
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.117.182
                    [local_port] => 59583
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 244939
                    [connect_time_us] => 72574
                    [namelookup_time_us] => 10436
                    [pretransfer_time_us] => 245097
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 245104
                    [total_time_us] => 418176
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 326
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY&grant_type=authorization_code&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&code=4%2F0AX4XfWhcrSkULunyurNzNZuV5L56aAZSz4zLCg2_mYSF6fVjv4jjRqq1KURu_tfPPOabcA
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-16T18:18:28+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [date] => Thu, 16 Sep 2021 18:18:28 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.353689
                    [namelookup_time] => 0.006914
                    [connect_time] => 0.050314
                    [pretransfer_time] => 0.2018
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 875
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.350177
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.194.42
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.117.182
                    [local_port] => 59584
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 201605
                    [connect_time_us] => 50314
                    [namelookup_time_us] => 6914
                    [pretransfer_time_us] => 201800
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 350177
                    [total_time_us] => 353689
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-16T18:18:55+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-16T18:18:55+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-16T18:18:56+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [pragma] => no-cache
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [date] => Thu, 16 Sep 2021 18:18:56 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.408875
                    [namelookup_time] => 0.01176
                    [connect_time] => 0.095315
                    [pretransfer_time] => 0.257542
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 757
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.403198
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.194.42
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.117.182
                    [local_port] => 51783
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 257392
                    [connect_time_us] => 95315
                    [namelookup_time_us] => 11760
                    [pretransfer_time_us] => 257542
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 403198
                    [total_time_us] => 408875
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-16T18:19:04+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-16T18:19:04+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-16T18:19:04+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [pragma] => no-cache
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [date] => Thu, 16 Sep 2021 18:19:04 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.348696
                    [namelookup_time] => 0.000752
                    [connect_time] => 0.045537
                    [pretransfer_time] => 0.196355
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 887
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.344495
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.194.42
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.117.182
                    [local_port] => 64562
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 196199
                    [connect_time_us] => 45537
                    [namelookup_time_us] => 752
                    [pretransfer_time_us] => 196355
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 344495
                    [total_time_us] => 348696
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-16T18:21:07+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-16T18:21:07+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-16T18:21:07+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Thu, 16 Sep 2021 18:21:07 GMT
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.468841
                    [namelookup_time] => 0.116013
                    [connect_time] => 0.186719
                    [pretransfer_time] => 0.325917
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 660
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.468625
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.67.202
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.117.182
                    [local_port] => 51945
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 325769
                    [connect_time_us] => 186719
                    [namelookup_time_us] => 116013
                    [pretransfer_time_us] => 325917
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 468625
                    [total_time_us] => 468841
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-16T18:21:18+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-16T18:21:18+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-16T18:21:19+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [date] => Thu, 16 Sep 2021 18:21:18 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.365839
                    [namelookup_time] => 0.000767
                    [connect_time] => 0.066056
                    [pretransfer_time] => 0.219446
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 846
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.359658
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.67.202
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.117.182
                    [local_port] => 59693
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 219289
                    [connect_time_us] => 66056
                    [namelookup_time_us] => 767
                    [pretransfer_time_us] => 219446
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 359658
                    [total_time_us] => 365839
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-09-16T18:21:28+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-09-16T18:21:28+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-09-16T18:21:29+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Thu, 16 Sep 2021 18:21:29 GMT
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.452101
                    [namelookup_time] => 0.000741
                    [connect_time] => 0.149397
                    [pretransfer_time] => 0.307114
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 683
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.446212
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.67.202
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.117.182
                    [local_port] => 51166
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 306965
                    [connect_time_us] => 149397
                    [namelookup_time_us] => 741
                    [pretransfer_time_us] => 307114
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 446212
                    [total_time_us] => 452101
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-k5Hr-vhPk3Qu0ZpP_J2LvFDKqpvWYZm-Bf2ezGUxtirAxaNtNKCFj5CBK4UbX7op4oL6ezQ6mrSuJPiMm9XgDHbxj21JcfD9yNO8Uw6NMgQKgmjPj1xbcHXNZY5FqYW8TlQfAk8A_EzDYJwCwudlZ
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-10-01T04:43:35+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-10-01T04:43:35+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-10-01T04:43:35+00:00 -- Hybridauth\Provider\Google::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://accounts.google.com/o/oauth2/auth?response_type=code&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&state=HA-TUIA6KNEDJS1590HVWORPZBG83M7YCQLFX24
)

debug -- ::1 -- 2021-10-01T04:43:39+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-10-01T04:43:39+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-10-01T04:43:39+00:00 -- Hybridauth\Provider\Google::authenticateFinish(), callback url:
Array
(
    [0] => http://localhost/UCapital/assets/php/login.php?provider=google&state=HA-TUIA6KNEDJS1590HVWORPZBG83M7YCQLFX24&code=4%2F0AX4XfWjBpFNTAffYG1vltIaomCFI68q9MXe74ac-Bx6AqPha9_dgEUmNUG1Vh-JStWBGaA&scope=email+profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+openid&authuser=1&prompt=consent
)

debug -- ::1 -- 2021-10-01T04:43:39+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                    [grant_type] => authorization_code
                    [redirect_uri] => http://localhost/UCapital/assets/php/login.php?provider=google
                    [code] => 4/0AX4XfWjBpFNTAffYG1vltIaomCFI68q9MXe74ac-Bx6AqPha9_dgEUmNUG1Vh-JStWBGaA
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [date] => Fri, 01 Oct 2021 04:43:39 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM91P1EcCqxwdneVyCf28WIArJPNiu_dreTFfJ0XlXgFQXYNHzMWVX9rTY2Xrv-vdlVcI1_YbMPEevObKEntLqnMEvIXNfT_RaxWbsolonNIFXji9jaiGu8otNFuYZignp2ts6wc_9uIxtwO9zxlxeSD",
  "expires_in": 3599,
  "refresh_token": "1//0gQu5dajX4J8xCgYIARAAGBASNwF-L9IrTqbcY7-mnODlbzUHYHkNNV6aaxlzu1U1TvF6gVOjsWKpJgoo4_WksEp5n1apREYRF3w",
  "scope": "https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email openid",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6IjhkOTI5YzYzZmYxMDgyYmJiOGM5OWY5OTRmYTNmZjRhZGFkYTJkMTEiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJiTnljbkJjWnpyU0xXd3loM0hxeHh3IiwiaWF0IjoxNjMzMDYzNDE5LCJleHAiOjE2MzMwNjcwMTl9.r5kVz-kGicek96KWyiHnwFJkGv7LgaGickdQhlXcq4ja5qRJi1AM4qj16b0-p2TWOO8PLIbzn-sBx6DkJa2ZeLn6ABBS7u1D3O8NJZ3u3f0f4QPX2Ehb4AcinaHbGHws7Ng8rOtUxcbMTLu2y_VF3yNULk779jimchsyfo8kx4ptQAz8FcoeUnU3AUkm5-Tmx6koANPNlLLCm94kxa2YmZEPuM50_AAImSmfAN97LWuxojMxagB9J7G8xfMheowS7xZculH09ww6DR5MlTDVdUuHjbtB_Uwr970HdYcSuV11h4bSb8MAvLDwMC2aSWLWi-YhczFVVabcEfgoCN-G4w"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.379576
                    [namelookup_time] => 0.015866
                    [connect_time] => 0.055238
                    [pretransfer_time] => 0.189459
                    [size_upload] => 326
                    [size_download] => 1410
                    [speed_download] => 3720
                    [speed_upload] => 860
                    [download_content_length] => -1
                    [upload_content_length] => 326
                    [starttransfer_time] => 0.18947
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.194.77
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 49469
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 189263
                    [connect_time_us] => 55238
                    [namelookup_time_us] => 15866
                    [pretransfer_time_us] => 189459
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 189470
                    [total_time_us] => 379576
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 326
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY&grant_type=authorization_code&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&code=4%2F0AX4XfWjBpFNTAffYG1vltIaomCFI68q9MXe74ac-Bx6AqPha9_dgEUmNUG1Vh-JStWBGaA
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-10-01T04:43:39+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM91P1EcCqxwdneVyCf28WIArJPNiu_dreTFfJ0XlXgFQXYNHzMWVX9rTY2Xrv-vdlVcI1_YbMPEevObKEntLqnMEvIXNfT_RaxWbsolonNIFXji9jaiGu8otNFuYZignp2ts6wc_9uIxtwO9zxlxeSD
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [pragma] => no-cache
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [date] => Fri, 01 Oct 2021 04:43:39 GMT
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.36791
                    [namelookup_time] => 0.019518
                    [connect_time] => 0.073223
                    [pretransfer_time] => 0.219857
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 841
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.367253
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 172.217.160.170
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 49470
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 219716
                    [connect_time_us] => 73223
                    [namelookup_time_us] => 19518
                    [pretransfer_time_us] => 219857
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 367253
                    [total_time_us] => 367910
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM91P1EcCqxwdneVyCf28WIArJPNiu_dreTFfJ0XlXgFQXYNHzMWVX9rTY2Xrv-vdlVcI1_YbMPEevObKEntLqnMEvIXNfT_RaxWbsolonNIFXji9jaiGu8otNFuYZignp2ts6wc_9uIxtwO9zxlxeSD


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM91P1EcCqxwdneVyCf28WIArJPNiu_dreTFfJ0XlXgFQXYNHzMWVX9rTY2Xrv-vdlVcI1_YbMPEevObKEntLqnMEvIXNfT_RaxWbsolonNIFXji9jaiGu8otNFuYZignp2ts6wc_9uIxtwO9zxlxeSD
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-10-01T05:45:25+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-10-01T05:45:25+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-10-01T05:45:25+00:00 -- Hybridauth\Provider\Google::authenticateBegin(), redirecting user to:
Array
(
    [0] => https://accounts.google.com/o/oauth2/auth?response_type=code&client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&state=HA-XON4UARHVFMPJQW2E58YT3DZK719BSL0GC6I
)

debug -- ::1 -- 2021-10-01T05:45:30+00:00 -- Initialize Hybridauth\Provider\Google, config: 
Array
(
    [callback] => http://localhost/UCapital/assets/php/login.php?provider=google
    [enabled] => 1
    [keys] => Array
        (
            [id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
            [secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
        )

    [debug_mode] => 1
    [debug_file] => error_logs.php
)

info -- ::1 -- 2021-10-01T05:45:30+00:00 -- Hybridauth\Provider\Google::authenticate()
debug -- ::1 -- 2021-10-01T05:45:30+00:00 -- Hybridauth\Provider\Google::authenticateFinish(), callback url:
Array
(
    [0] => http://localhost/UCapital/assets/php/login.php?provider=google&state=HA-XON4UARHVFMPJQW2E58YT3DZK719BSL0GC6I&code=4%2F0AX4XfWjseIKR4MJ4k9O1RPuQXa4T3kCy4BQx8sDJBYxlAdskNZBMWMjlSFbZAYANC33w4A&scope=email+profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+openid&authuser=1&prompt=consent
)

debug -- ::1 -- 2021-10-01T05:45:30+00:00 -- Hybridauth\HttpClient\Curl::request( https://accounts.google.com/o/oauth2/token, POST ), response:
Array
(
    [request] => Array
        (
            [uri] => https://accounts.google.com/o/oauth2/token
            [method] => POST
            [parameters] => Array
                (
                    [client_id] => 637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com
                    [client_secret] => 9a1AO6Ca3IT0wg3SrBnT8PiY
                    [grant_type] => authorization_code
                    [redirect_uri] => http://localhost/UCapital/assets/php/login.php?provider=google
                    [code] => 4/0AX4XfWjseIKR4MJ4k9O1RPuQXa4T3kCy4BQx8sDJBYxlAdskNZBMWMjlSFbZAYANC33w4A
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Fri, 01 Oct 2021 05:45:30 GMT
                    [pragma] => no-cache
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => scaffolding on HTTPServer2
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "access_token": "ya29.a0ARrdaM-NxJmeE0PeIrdC6iEwFddcdA2FBRDjXMThQFW7Q3FKUh622eriSd7xYOfmxay25k51XQLRYjcM1a9YssFDd_YvZJ_RtJ4_j-yFgpeEE6sgMZBcvft5yVVc9B_G2nbVhbPxZLicurlAS3rfinTzv8Si",
  "expires_in": 3599,
  "refresh_token": "1//0gs6SgfGAX2ohCgYIARAAGBASNwF-L9Irab5kKq9a-bYyBTYfsU_CWC2W7fjzJWStv-a4Gl7jMVYKZjpft-tbNBbObAlnH9-Uby0",
  "scope": "https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email openid",
  "token_type": "Bearer",
  "id_token": "eyJhbGciOiJSUzI1NiIsImtpZCI6IjhkOTI5YzYzZmYxMDgyYmJiOGM5OWY5OTRmYTNmZjRhZGFkYTJkMTEiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNjM3MDMxNDA0MTQ3LTIxdTRzdWwzdnQ0b250NTBhaThucXNzMm1xbzBidXJ2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMDIxMTU0MjU1Mjg5NTcyODc1IiwiZW1haWwiOiJhZGl0eWFzaW5naHJhd2F0OTZAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJ4bGdkbFFmMzN6SGJKY0Zla19tSlh3IiwiaWF0IjoxNjMzMDY3MTMwLCJleHAiOjE2MzMwNzA3MzB9.bKalPqBlwxMeoPDEA2nWQGVLpBqP9lEssjw1pDWgG9wM76LBv41M4wnsqZhGtXgJaYsBf0A4eOBv9oB6qB5zOWkmX49sYQl0qCqwqVvhy-CTMk-yRJbBs6RCEGGfk1cqw7hsjBN1PX7zENy38XMaZ4U-mrIsZ7VQRulmtVY1KxZ7wi0TIpZ0ZpwD_T94m4c7PTnIPVUn0cD5ZPMZKRd8YuOqgk2O0lj_8T5b4WOMMkFhicf7rYNT78xNzljsmezf2UU1k0f0C5WtzGirbPMkUirBL5cTp5wixjN_H46XJ0OWonQ1gd80bsKL8jeWNHw3U5nH6C6T60DHuJepRlhvoQ"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://accounts.google.com/o/oauth2/token
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 621
                    [request_size] => 320
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.417684
                    [namelookup_time] => 0.005597
                    [connect_time] => 0.074365
                    [pretransfer_time] => 0.237502
                    [size_upload] => 326
                    [size_download] => 1410
                    [speed_download] => 3381
                    [speed_upload] => 781
                    [download_content_length] => -1
                    [upload_content_length] => 326
                    [starttransfer_time] => 0.237512
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 216.58.196.77
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 50833
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 237336
                    [connect_time_us] => 74365
                    [namelookup_time_us] => 5597
                    [pretransfer_time_us] => 237502
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 237512
                    [total_time_us] => 417684
                    [request_header] => POST /o/oauth2/token HTTP/2
Host: accounts.google.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 326
Content-Type: application/x-www-form-urlencoded


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [47] => 1
                    [10015] => client_id=637031404147-21u4sul3vt4ont50ai8nqss2mqo0burv.apps.googleusercontent.com&client_secret=9a1AO6Ca3IT0wg3SrBnT8PiY&grant_type=authorization_code&redirect_uri=http%3A%2F%2Flocalhost%2FUCapital%2Fassets%2Fphp%2Flogin.php%3Fprovider%3Dgoogle&code=4%2F0AX4XfWjseIKR4MJ4k9O1RPuQXa4T3kCy4BQx8sDJBYxlAdskNZBMWMjlSFbZAYANC33w4A
                    [10002] => https://accounts.google.com/o/oauth2/token
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                        )

                    [20079] => *omitted
                )

        )

)

debug -- ::1 -- 2021-10-01T05:45:30+00:00 -- Hybridauth\HttpClient\Curl::request( https://www.googleapis.com/oauth2/v3/userinfo?, GET ), response:
Array
(
    [request] => Array
        (
            [uri] => https://www.googleapis.com/oauth2/v3/userinfo
            [method] => GET
            [parameters] => Array
                (
                )

            [headers] => Array
                (
                    [Accept] => */*
                    [Cache-Control] => max-age=0
                    [Connection] => keep-alive
                    [Expect] => 
                    [Pragma] => 
                    [Authorization] => Bearer ya29.a0ARrdaM-NxJmeE0PeIrdC6iEwFddcdA2FBRDjXMThQFW7Q3FKUh622eriSd7xYOfmxay25k51XQLRYjcM1a9YssFDd_YvZJ_RtJ4_j-yFgpeEE6sgMZBcvft5yVVc9B_G2nbVhbPxZLicurlAS3rfinTzv8Si
                )

        )

    [response] => Array
        (
            [code] => 200
            [headers] => Array
                (
                    [date] => Fri, 01 Oct 2021 05:45:30 GMT
                    [pragma] => no-cache
                    [expires] => Mon, 01 Jan 1990 00:00:00 GMT
                    [cache_control] => no-cache, no-store, max-age=0, must-revalidate
                    [content_type] => application/json; charset=utf-8
                    [vary] => Origin,Accept-Encoding
                    [server] => ESF
                    [x_xss_protection] => 0
                    [x_frame_options] => SAMEORIGIN
                    [x_content_type_options] => nosniff
                    [alt_svc] => h3=":443"; ma=2592000,h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
                    [accept_ranges] => none
                )

            [body] => {
  "sub": "103021154255289572875",
  "name": "Aditya Rawat",
  "given_name": "Aditya",
  "family_name": "Rawat",
  "picture": "https://lh3.googleusercontent.com/a/AATXAJwZwXuVypJc2JK0Ssdm3Qg2QMCtnAJVt3AK-YZ4\u003ds96-c",
  "email": "adityasinghrawat96@gmail.com",
  "email_verified": true,
  "locale": "en"
}
        )

    [client] => Array
        (
            [error] => 
            [info] => Array
                (
                    [url] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [content_type] => application/json; charset=utf-8
                    [http_code] => 200
                    [header_size] => 598
                    [request_size] => 440
                    [filetime] => -1
                    [ssl_verify_result] => 0
                    [redirect_count] => 0
                    [total_time] => 0.411241
                    [namelookup_time] => 0.065454
                    [connect_time] => 0.105119
                    [pretransfer_time] => 0.240908
                    [size_upload] => 0
                    [size_download] => 309
                    [speed_download] => 751
                    [speed_upload] => 0
                    [download_content_length] => -1
                    [upload_content_length] => -1
                    [starttransfer_time] => 0.405054
                    [redirect_time] => 0
                    [redirect_url] => 
                    [primary_ip] => 142.250.194.138
                    [certinfo] => Array
                        (
                        )

                    [primary_port] => 443
                    [local_ip] => 192.168.254.182
                    [local_port] => 50834
                    [http_version] => 3
                    [protocol] => 2
                    [ssl_verifyresult] => 0
                    [scheme] => HTTPS
                    [appconnect_time_us] => 240770
                    [connect_time_us] => 105119
                    [namelookup_time_us] => 65454
                    [pretransfer_time_us] => 240908
                    [redirect_time_us] => 0
                    [starttransfer_time_us] => 405054
                    [total_time_us] => 411241
                    [request_header] => GET /oauth2/v3/userinfo? HTTP/2
Host: www.googleapis.com
User-Agent: Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
Accept-Encoding: identity
Accept: */*
Cache-Control: max-age=0
Connection: keep-alive
Authorization: Bearer ya29.a0ARrdaM-NxJmeE0PeIrdC6iEwFddcdA2FBRDjXMThQFW7Q3FKUh622eriSd7xYOfmxay25k51XQLRYjcM1a9YssFDd_YvZJ_RtJ4_j-yFgpeEE6sgMZBcvft5yVVc9B_G2nbVhbPxZLicurlAS3rfinTzv8Si


                )

            [opts] => Array
                (
                    [13] => 30
                    [78] => 30
                    [64] => 
                    [81] => 
                    [19913] => 1
                    [52] => 1
                    [68] => 5
                    [2] => 1
                    [10102] => identity
                    [10018] => Hybridauth, PHP Social Authentication Library (https://github.com/hybridauth/hybridauth)
                    [10002] => https://www.googleapis.com/oauth2/v3/userinfo?
                    [10023] => Array
                        (
                            [0] => Accept: */*
                            [1] => Cache-Control: max-age=0
                            [2] => Connection: keep-alive
                            [3] => Expect: 
                            [4] => Pragma: 
                            [5] => Authorization: Bearer ya29.a0ARrdaM-NxJmeE0PeIrdC6iEwFddcdA2FBRDjXMThQFW7Q3FKUh622eriSd7xYOfmxay25k51XQLRYjcM1a9YssFDd_YvZJ_RtJ4_j-yFgpeEE6sgMZBcvft5yVVc9B_G2nbVhbPxZLicurlAS3rfinTzv8Si
                        )

                    [20079] => *omitted
                )

        )

)

