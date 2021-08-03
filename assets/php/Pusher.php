<script type="text/javascript">
$(document).ready(function(){
  $(document.body).append('<audio class="chat_notification_audio" src="data:audio/mpeg;base64,SUQzBAAAAAAAelRBTEIAAAATAAADU3RvY2tyaW5ndG9uZS5jb20AVFBFMQAAABMAAANTdG9ja3Jpbmd0b25lLmNvbQBUSVQyAAAAEwAAA1N0b2NrcmluZ3RvbmUuY29tAFRTU0UAAAAPAAADTGF2ZjU3LjgzLjEwMAAAAAAAAAAAAAAA//ugAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAWGluZwAAAA8AAAAPAAAhBAAWFhYWFhYeHh4eHh4eNzc3Nzc3VlZWVlZWVm1tbW1tbW15eXl5eXmJiYmJiYmJqampqampqby8vLy8vMjIyMjIyMjT09PT09PT3d3d3d3d7e3t7e3t7fn5+fn5+fn///////8AAAAATEFNRTMuMTAwAAAAAAAAAAAAAAAA3vJAAAAAAAAAIQS0cUyHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//tQROeG4Vh5xioAFHQdwCkJNAAABe3hFymAUcjBPOLFMAp5rKrZ5mzbVejGdT2FMcOgyQEotKKSxtEAKgGqQ2TLjPMybN0zdRcNE2CQciX9JvcvFABY//MLURmvvLCssHZ/GSDRoRKWBooYPHMMEgkHlOlhZVfAxTv187LBIJjt5ibsJeN/2djSshJmK1UfdDe1NNrfSjf3/+////XZru0/RMXYlpyIynFxccZEEEcwsLGKoqMGh07HFw4FjhggGrmiLEMzu//8ZABEGvQoIv/7YETpBmHTeMUqQCx2JCAY2GAAAAZV5xcpgFHAwDzi4TAV+MSHZezhMo2R2OHWzbWEOUkZzAwcBA6m7B252zNpTPnTIjwuQNooS5MgkNAUARIyhYwg5HBAcY4caIoJFDBEDUkQMTXIYAUYggaBkTMTMtTx4xMwFTpx54KvrYMUAV4YEGiMwpjrsA4oYUGw5vF2iEWIhYOFGUINBiUEygdAmRMhDjJLcte24VFhBN3424Dss3n7sPSuGorFIRJv7rUlv558lkxHXXv2KXG9X3vn4fv8f/VJc7N38cf1//hv9f9fue87nK9+UVKax3//917tvv/+/5/8//+pGKOvnv//Xfz33f/70ET4gAOfekZqCRPwjc8YrVGFjmHB3xv1vQAkyzzjNrWwBdSk3X3nc39JnXx7r+/+s8Oc/9f+sf3rX/qv+sM+WFqzT7b/f9sgAiIxNe8OoJ17l9DJJDIBDEiTx5zei0xy2Zjy5doqEzSnzHhgONER0UDO1EFT6AQwAsEAyZ0QCgGSGhvDUGHJmZ2ZTFnv2Ji5oF3g5IeNzjzcVsBTZmgcaO8mdkBpxsZSjhjOZENA4oBwGYIOA4hMKJjKVEedTDRcxEPMHGTHw8yFJJmYzpWM2CDKy0kIjRDQxAGrwAgILoFlACDhAulumG+4NFTJx8wkPAQewuMF92/ioEEh4IYGqcx4kDBRaECYyunblIZQvBpLQ4Xlz5uJvp/6/tzH///ufrX7wzv3t9qYVcudr8pLMo32z+6mNPZt85//nT0tPn///6////5MUlaYw3+v5+O+/nvDudjusM898u47/+d7v+d/Xf1a1zP87GrWu3v3hyxOV+zqXUVghjBgRhAhMAJkMqNQ0VOYGPm6HhwUCNiYplmCgwcWO2TIZpY2b2bgJWMiBUSgMFGIpBrxIVADBgvEEJCUKLmArAxJ0IQRmURxONLAlEvKJ6HbWIlxHV1iCKO4ByAvpItKcSpkuiAXRcVdZZBLlh46FPOPNLlsibWLXGIXqWrKkMy7iELN4PoU8g4ciyt/x33znocrzz+RZIuRrHfVpUVcdbUD1+4/8adJlFN//+9r1Sj/n//6iPP/+c//+/EJyYxp7HP/5ks+n2kIxWxT4c/////OYrf/63v/+Jz/7hFL/7o3mkn/Pyijzz1//9Ku9wb/aSyCynhVh3pSMQIAAEBEEROl4ZBaRAIugsCgUzK4N8PS/xjAEYWNkzWb+OH9izITOC0x44KpUY/Mnbtq2B4IjyPAjjnwowL9O8CQEvuDAI1xI9jI2OkKiggMmmkAuBxXrsn5kgaIADJvRoCT33WM8UVMs+N1pLcMyRAxtRYRAleGJHDpNoTKn0QGYTsNSlvKZGwlFg5O0lTF5ksGgyoZCkxHnvO7cueSQbzbJyNq3/M0yPDysvne5f/ogFAlRG13/z8OVrkv///um///9cp8v9k92fjFVr6c7Ar/++BE5oAHuGbM/m8EAQys2b/N6IAikYdJ+c4ABNAwaHc94BCH/aKAjaQjtzcLdowoeY/e////XP//3nr/qWOZ5yD/+v2GLPXHVXYOsHD3Yz393mzQh5t0CexQAAAJA4DAAAABEAIDR5N0wAC5q11g0LmnmODRQYCjRjUfGGwcZjCJbYxWAnFMKgQwIEU5iACiECGEwY3hEEEHiQAo9MZS2MOAowKGzCANGAuZQZ6yU5guozFYLMWg0BAteB0kZmRUAPAaHjLIBf5EVvjAgOMDARMRAI4LtK2mBAKOAMwMAZS+Czm5LqavFXHY/SxuCi/rXFMk5WxQbAHbVLJphPuCGmNIZxRQ85T1SNlTrrFao7M5lbeVdrSLP////rpy/vPy34jAC9quFbLWsvxkdO/tuWf//9S/jyH4ex1ruo9c119cdb12ouinfyV2t5/n2pZwzbHBayF3tC5apt4YWqtLUaTEnKfqreHgsVCR7//HgAAJoGgAAAgEKSRqKcpiGE6JyYB4ARhfCLBUUA1O9zDD/BJMD0BYwpQB2ymagOUYBAFBgoApkALQIADMAYAswTwCElhEAUYE4BjsKDJKCABMGAigICMwcBCRQAVPYLBfmAKCGYCIHBgTu6mQKIOYIIMRgOAegIDwxOwjDAIAaKABVnGR4AkYL4gYQNARAJGAcAKYAIBAVABBQDS82BMuid+MrtnW7uTPoAC0oqAInky6+6LhO9f78RdNhBdCB6fXyVrz7J0tO79WGaBnUio3fp4fim55K2B8v//3uJS7////FuzaRifp+yu32qqZ25Oylrj+O9n//qVY4OFS4//4VLHK8cps89ciEceeINdiEKtf/1Gts6vOlSwzFccbOPP1KqaGaK3LJuLnNQcZ////1sYWFw5VsQBmfsUQG698AChMgKRmMSOMv6IZIOQwKFwjQZhTJGqeyo2UuiQ8i5gT9bGTl4gREhXQDBoGW6gaIMFvRXKBwkTVBJJ60W6JiTpeLxt60kaSZeKxqo4XUC6jSLx9V2+kaooo1JJF9jUmUfOmf/utR/TRNDqJgVDRIwOGjo6KRWRRRWZrWvQu+tOsunC8bOqACIuW4APX28CMDMCCRYIMPIACyHlKplgWhqGAimimypmbfpt4AnCKF0oEEWTJBS4ggXjMXKAYJAxmEDmBQ+EL+jiIoQEkTNFHR/ykXS85xBqOcIGw7SbLRqXknWkrm6VBlzMzuYVGxFWRc+kkk9JH01fW/prMmWkinmhrQeykSspp1OZvMGoVpuYBQU/VMBRebjCB/dvwYkYRCC9QcFC6AjzkwaBUEqlKGygbC1YoAe1ub0aUAa25+pnKc1reVE76PrWYYt1QQr/8gVP9Vw6iA7dCv7xXZCrxTS0OomzXEIr/+8BEuAAEc1TS/2qACI5KOj/t0AFP4U9N7Q03alao6H28JPzkQ/gwdM/ooSf5f/4qiQTXQPFCuJN0YI3Tc5GgZumsvSCcIXl3e+Cff6F/I6AULGaogezS8BUCCwaKgQoGgmUNVMQaBOKgopogOcVPpX0hVwWeBByANFGgqmxWhmPZbmcLj1mZKFrOqeucJsl//PYf+4pKoitJIf//JdZGqkm2hUmZatzSIXMExXCIhRFSIUwUEJbOmx/////0N//+CIhQEyFQ8WI4Ey8CdCu57KBE7tkyqRECJFWkz5EmIeigKBxylZcFaH23Mze6yhcoiCAKCmIGwBITnyIyMLLwI5svUoXOvXDb4ONSRmq/0MwFAaFe0RwGp4ptI1VU8mgEJQ/78qn/Pzlks8z6Is1GqXMt7G1UtTvtGzjo5W54yw7m6/j56lma1DpdI5SYyzU/wwql9nNbF/8HDADO2UpO/WuQJzGEAOJBYBFkwmVDkoAKAk/AOCal6qCy2k6uuK6s3PZWYsKqNNbJNUKixyiK4jqIqwVMClh8nyMcQVUkRiL+x1qSriqzcqWKmxxZzNJpWpCSQ9XK39LIZ/Qe1yUPQyPaGcrPCkmpUpvDPLlbqEWSApZoiHnv1jAMfC0wSSkOIyJAZITMRuNBNKollDGxYFNZLGDtqvkh6JAbWudIqME4qbKlUwKj5mhBFdRVfj5FZNFnU2EZ1iQ9VbhinKOxhtSvDWt8qq18wtYz5GXSxP+sz9E0JZENStBWAADM5qG09kZAMRAkwkMFFwQEDFblPvrQweCUhAEA1B1cMnVzOeJPfw1CETiUJT8vVZWxGUdH3YwoDDUixmAROZoZnKAjG8LqyKS8aOq4ojy/2vqJIu1PwjCoaUF3EV1Fmfqbq///////oVIAZlmZnb3VAABemOUWVNHIxVbz/hOBRRUkRBBDkDAKWqVI6uAIFVwTA2wDgiBsPAEbBzXroP/7kET6gAOfVND7Zhx4dyqp73ECjw04/THuZQThqBplvcYNpFdbDCIkJV1yDHvOhssJEwvJAuxOdMKzkxqWLtjBINk5CjLOEIuSCgjdBHNaK5MgaSQro4Y/+ls68KLs//qviU9+jX////8xqb//poAA2YAAPL6AADPUAuJyAVzChoONFdBR91NHIT7Woj9I3/54IUv8EBPCYY9ohekqz////////////++GADdqqY9kjSIMFAsDCswwNBCCDCgdPKFswsCrMGmCgMYcBACDCAKG593mYK4RF0wSASVZJpIjXSQNLreMm0KbWqGzor89/bpL1e1TCOXTUURKznSCCSYXe1BSCCEobMgYbbR9hZdjI3BeeqL6rtvqHh/a9BtyQitkmGBZwINQH+A3hYmoXqb/1LIWpRQBId2mN4qCQAcDmAhoYZhA4FJw1dHCCt24aXeYiFmFjIkDvPSWOf/6D4qsExWZAcG5+lCgoRKGBsVgDJiQ42oQGE4RuH+ev/Bua896iOCNGyTvnPpf91ZpAWCKw87a6TnI5xf////1///71f/7oGTZgAQGOUr7PEjIOkDpX2X8ARF49y31xIAhrhRlfraQBAAgI5xYZ4h5hfHoWgUwWAiIZNjHxUdMe0wSDggoEnxLAzkDeUwMENAIkJzbGLHx2CoF0k2k7d53QcRDZ+HJC4XmgsvXyk3GjDDEATCKNVpiDMLDJDNTFknFBghsBJ7KfYtGHNfQIHfaQOxQjycAopqwl43+qQmgdN22b8vNPceNxBuCxGcQOmnzt6rhukf99LMnSvnsWTxZ+HIbaHJXvuFTPuv+Qw3TRvWDL+50jaNPTEfloa2leRf////P///1Yl8xYeSbt/8ff9+3ca/MtZcCc7v+/////////rX/Usfn/6pMKnIfXXawu2MF0Xvw7VuTn2gECExEO6szO6aGBgABAMCwoxPMMCBTPydHM1yPMREBICFlVKwycrN0GkI7IOBXWMEHjMBKVKALHIngUZft2WCZgJZvmmEnINHfFhy2E4XGAzAcgYWBjqbr5Zuuh5FVleQAsKsVOdpoKAp2pvfle5LKvtfBtSR9iD8Mkonnl8ShmfZx/////GT2I3L7esFoN669WN2//+///7b433fkdJGMcHqeS1FK13Ok////////ywzllfVP3DHPOnlkvln0lJT7/+f////////Tw3JH4qY551Of//8So6C9CN1I1If//sNqORVf9JKCMCIBS0SJACsUAP/74GTzAAedZlB+bySA5oy6X83hICodlV/5zhCMbrMsvzewEILCgmAUDJlMmo8mFnKYJHxlKymbTSY1RZn1cCEhn6gAYtFpmMKiwVEC6RmNG70FN0wuB5GYaAZgwTg0cGLw4TCAIBBh4MGDwiXDBAQEQB2yJKwwaGzHJZMoh24ukQi8mKwjAQyEDJVzPZl4w8JDBAKDgQYRALnmMgaAgGxBohZ0wSKjKALMSAcLhAxeKm3gUVAaEsHAhhiDdWC2YMcZko/DVtmVxqT6LqMECQxcCmCmAQOlesM/IqBjBpJGghitJ8ZIYHEZrIDmHhiWye4HAh/Wt9QSIiQfErEMtUTGghrzR8X1fWSuy+zObNNak7MaV+3XflQNodt2KmHI3HZZN0D7N2Z1G98tPC5MZflsT+4Q9dzdCYdhrbAQMA2HwTUnGQNQhhL6TR6orCvlpLuxetL7Sy28j1+9TSh/oGq1OY0Lowy/OMXZBjB0BoGHBQBy2FIWCM6oKkgQNEgEDCCGgouI5gYwByIvE3w3HAAGiYcPhhoYiCHBtCiyegEADCAEwobZktYWEDBQcw8RGBNU7AEjYDAAGwcAARhxIY4CTsUSuLACsQLgABFDsTxFNibfq4bQSEBIKUoYFPmBqBkI6PIoJBDIwqHIkuxWBOtdb3uirbAjWVBW7yqbnZpa9OztMNzy8D8UV+Wl9kajAAFS2kBAC7SHMxE4VkkUFI/v3AcXf/KYimpK8kpgp+voIvH3ZisWpaWzHpczGk/5ROfT/8rn7f/T0WUR/6Sjnsqjwv67NN+EBP91/LMPww7nP///3f7Svtx9ZiP////xCJe4UljkNOky6j//+oqs5Mt////8+ogQEwFrgA0Az5d4FBIBgcChoCijOyQEFTVVMncpNQExR9CpvrMZFxJE6kSBSLxFkkTUul3Uk5SIoM0UwstA2IA6oCyoixARcpBTyKJqjmJeIMl//qSdFX6xSIskc0gJLIEGLyT/9FJIvIt/+s2LxsYk6e2//X6m/1JJIs3s1aKKJj/SMk0Db0jYyLxeW2pIyNplQRQJ8kC+mScDBAkgDDARHAuEYE65QglSpUZddwUuBYJtqeqc1WWCqfFVtbQoT7/Ft4fPoJPRKkuV0FHJ1QuOfa1vdrivawXr23//xTX+7Ytu1v+2xb4fRl0rn0bf/z8Y9cX//+d5rX5zn11mLrE0UGkmzX//3O+bnq45BTxZopb/hBRQ7k4KCjfiiv0wQgJ7dB2Fz40BoLmTQCQUHUNW8aCQztLwEAV2rViQ4KJhzTZThSQ3DtV+efU125L4z/7yyrarSdcrTabuRQiHB9DdSlb/I42PnKIKxnTVkdQFFdPpy8o2Fcj1lpsdh7MdLuy+3Y5N4WGWyhmNXYKGRf/7sETHgASGZ1T/amAIjEfqz+y8AU+JPUvtFHjh9SepfY0gpIBPEAifnur6g1puTB0BH9mL007zUFL1G41yZ6ayGjxNTJiiq0bFgMQCqISDN8+0isCAJsDKWCv4Hi0LCYseg8cDwNpkFQdD1//kVHM3zH20XzbRaytRUlC2vBQc18fqzes1MdVzVxfG161I/1mprXVYtvqLuZFVWyfJMAJjBAHWqDv8sFXU4aqpEFAEe2R/TSgDPCIERlgMQRolFphOpiwsMOgMKg90BoFQ4YfIzIEv2kNPa+3R/7NNI6SADoDoPrgWsVNVZw6BdbSDaQUigsLFf8HJlHsNqBLQs0knOqryaMWVNS5WtUaVVaVVVeG1qo//Zl/1a+VVv+eP/7//0OMj9v9zWGxYAjga26G6TSDpiMAEkokImkmCAR5K8u4KAsDBRhkJLSJJihZvWtXaV3X9h00UYAognWqqSKiqQ1wCoBY5VAWD8AohWWIlfLHf/5TSzTSioqKwuo6aXa15ZmiV64lLvenFpJNWg6FuJJVxYGUFg7LGxLV6g78NTAAogT1H38gAAckSgBEwRMQgMKAMoEhkS/Bw/NooEJLzEpWklXUehYNhaksBcl091ukqYgPhaTBAYXM5JBaa7o7BCuNDgIVxg21MXkwG7sq2UMkpbLkgV9XH0g2RmWhEtEKsAZQR5iV+sAADCydpKOGBkpCAAwTP+hVemsj8JFGsr+GfDDmJwjOV0EPU0WotVmR+UrFlKWVkO/qX1L/LlzFwowpwVI4Kh1X//oppAEIIl4//1AAJhQ2YoBQKFsFDRZMo0kIGgC2WzT0B9peZiv+E//uQZOMAA+1Uzfs8QWp2h5mvbyg5DDS9L+5lB2krE6W9vAjsEWHaY8j/1Na+faS7xWznkH/IpzYSUS5fgtiVb2rvJLfVWaqjq0ijOkNo7Zoyvmt3RFO4ArDMPPHAAAEKdqAWqNULzHUqDBleOKXFMRpsgO0FzpTKVYKSl4ooAOPHf4usGDCEOAD/Amg6kQYJ4MuAB5oHsGCZwFGUE4YkTQCEKBmszUrt2X/y4SEUNIhP4sFP///////////d//X21IhLHThILEIhpvCJK2gEc/T9aqRY8IWMFQuK4JfAjl0hm/hzID4t/xZP////////////12ggIVdgfX0AAAiUF6FvwcICMYEAcYzcl8QURpHxpCJ2xEJq9h6hp1v9HY6NU73b0uEZBia+KoEH//9H//////06Pt+7/oaAA0SJCeOAAAJO3RdKg7SyIEc1EyBtICX4uygXdTPzNy+4PJ//krJiz4hH/NvLnP///////////1cmgoBi8QCsqsqtJm0AQAAAAYIAGPwrXBlhaCZU4mvijxGwGCmY2GsLMiBnnMwC//uAZNEBMrUvyvuYMcotgelvbwM3B6ApKezvJCDPB+V5jRyk3aCARzvSA/Zi0Y04SKETz9orGAsCWZ1rJe5kG4whCLHgAo8k1zv6K/9mZYz930////9F2b/+6c/+tZIYAkQ7szMrM0vAAAAAAAEPBR2jESD7liAa4mxcmSnUvLRKmyqO43/gQEMY4HHCGE4lXfNzIdnThfpzDIO4L////////////8ar/9v/6BaQCUVTR1NkRZKiwAAAAABERNSgPlBO4vJwpVFH4yh2EZKF/hICk8eOSFQAZKMsv5kBpwYBBQBYKA0FMDYDVAAM0cAIEgLgBSQnJAqk2BlQoCwcFgQGGABkEviFTx13YG7gBiAYjBEEBs2OSQwTcI6IfSTRQJITuKEFgEKEFHSTJVIcZEWep3jNlEiZFCJEUKZfc1QYyL38lnTTMCopEnzJzpicLCRxb6PzEny4bFw63pI0UFf///91Lf/d3Utf//v/+3Bk+wACLBlJ/WxACDph6V+tGAEM6Hsr+bQAATePZf8yMACtTOidQm5XMSh//2oMkWKallxE3OaAoaYl2Z1ZmloAAAAAAASLJJBw8HEF6n8JgpFdqtRdlOZegOFUqlU8BIDBaldjaFtrk31bdfCsfQFP64v5vBmAw4FiZGr////////////1tKRtpJRtEAAJdVze7WtMhUFdhhsm+7Zu7x6jmUtHRtVt6lKqJb1oayHSjoUpUwpSurMtSlylb2v3oxSt0133Nv9X2//r0////9Pb9Ho/JfVESjoppZ0ZVZw9SKIeIEsgIIVnu4J0MSqNFAADyZlFG/hPp/u2MW1v9WfRUeY1Df8xjG/Nxh6mMrP////309G/+ye1OiHp6f9UouVy0//9j9200dPjCMciOV87FG1UTMSK//ugZOsABqZ6y35qhIBQYul/zLwADMHnF72RAAF6vSJnnlAABZzFFjiYgowRkO4sKB5h7GOcFEkGV//q//////////L//ff66k1d80VGs85rYVyet/D/z//f/hP/P6jtzhKMLq86JfcZnGJKkTbJthA1KbTCFbozRGRNokr5YcKoRITWaHSYnKvmDM/1/b/++37q176521t196///qZ6f//7d9nS56HLPRJ7tMQ0fc9GKM8oXNOc4uUJGEx8WFgXjo6XGhQbFxNYshAu4Mr///////////+f//2WPy8XPcRkPojcLdnl78rXOfz//+79/PVQvLvPUV2sirt6hSjq/QUQsstZqsJ0SJERKgVRaqwSt2ysdGYHF0B8/FN84Maf///////////70Xf2I9EqWqmypdjtVDj2iCkYl7Qy7MoMStArNRqo+fVLVq/kPXtT/hGdSTpvbQYjSQWaWOkTZOcfEhgZOT6UUi54QMkhG8F1gLQgbPrCFURhWQfgUpCOgUYkhFJCDysnKoWoAAAFVLCCCCCCCCaaadP/+////tb/r/////9uq8+imFioVkI/MYaiHKynKqGNECDUEjiri5BcBg6JkQgigcPDpTjGIVqwACItyWUmGGGGGeeeeeeeeeGGGGGGGH/9P9df7//Zu2v7/////+vNVEK9L1UrylUjqYQRj5VMxxMX//uQROkP8o96wwJBTfBCjziASAd+CiHnDAkFN8mvPWDBQSb4RGKUPAoWInK0PMUUGh2RisHio4QJEP4KJCBo9////////////////yx7EIx/ErHLCTyIlhQJAkgEYKJAQEDQMgqCoKgr///////////////lXLDWVRIqeJQVBXJVTEFNRTMuMTAwVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV//tQRP6HciB6RMJALHBOzziYYAWaBCALEQeYIACigaIQ8wgAVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVQ=="></audio>');
  audio = document.getElementsByClassName("chat_notification_audio")[0];
});


$(document).ready(function(){
  $.ajax({
    url:"../../assets/php/checkUnreadMessages.php",
    type: "POST",
    success:function(data) {
      var chatData = JSON.parse(data);
      if(chatData.msg_count > 0){
        $(".unread_chats_notification").append('<span class="alert-show-message54"></span>');
        $(".unread_chats_notification_count").html(chatData.msg_count + " Unread Messages");
        var unread_chats = chatData.response;
        var unread_counter = 0;
        for(var unreadIndex = 0; unreadIndex < unread_chats.length; unreadIndex++){
          if(unread_counter > 9){
            break;
          }else{
            var unread_user_image = "../../dist/img/avatar0.png";
            var unread_user_name = unread_chats[unreadIndex].first_name;
            if(unread_chats[unreadIndex].profile_picture != "" || unread_chats[unreadIndex].profile_picture != null){
              unread_user_image = '../../assets/profiles/' + unread_chats[unreadIndex].profile_picture;
            }
            if(unread_chats[unreadIndex].user_type == 0){
              unread_user_name = unread_chats[unreadIndex].first_name + " (Super Admin)";
            }else if(unread_chats[unreadIndex].user_type == 1){
              unread_user_name = unread_chats[unreadIndex].first_name + " (Support)";
            }else if(unread_chats[unreadIndex].user_type == 2){
              unread_user_name = unread_chats[unreadIndex].first_name + " (Advisor)";
            }else if(unread_chats[unreadIndex].user_type == 3){
              unread_user_name = unread_chats[unreadIndex].first_name;
            }
            $('.unread_chat_container').append('<form data-user="'+unread_chats[unreadIndex].user_id+'" action="../chat/index.php" method="post" class="dropdown-item unread_user_details_container" style="display: flex; align-items: center; cursor:pointer;" onclick="$(this).submit();"> <input type="text" name="chat_recipient_id" value="'+unread_chats[unreadIndex].user_id+'" hidden> <input type="text" name="chat_recipient_image" value="'+unread_user_image+'" hidden> <input type="text" name="chat_recipient_type" value="'+unread_chats[unreadIndex].user_type+'" hidden> <img src="'+unread_user_image+'" alt="User profile picture" style="height: 30px; width: 30px; border-radius: 50%;"> <div class="unread_user_details" style="margin-left: 10px; line-height: 20px;"> <span style="display: block; font-size: 14px"><b>'+unread_user_name+'</b></span> <small>'+unread_chats[unreadIndex].msg_count+' unread messages</small> </div></form> <div class="dropdown-divider"></div>')
          }
        }
      }else{
        $(".unread_chats_notification_count").html("No new messages");
      }
    }
  });
});



var session_user = <?=$user_id; ?>;
var session_user_chat_name = '<?=$session_user_chat_name; ?>';
var current_recipient = "";
var sender_user_type = '<?=$sender_user_type; ?>';

var pusher = new Pusher('<?=PUSHER_APP_KEY ?>', {
  cluster: '<?=PUSHER_APP_CLUSTER ?>',
  authEndpoint: '../../assets/php/pusher_endpoint.php',
});


var channel = pusher.subscribe('<?=PUSHER_APP_CHANNEL ?>');
channel.bind('<?=PUSHER_APP_EVENT ?>', function(data) {
  if(data.receiver == '<?=$user_id; ?>'){
    audio.play();
    if(current_recipient == data.sender){
      $(".chat_body").append('<div class="chat_segment"><img class="chat_user_image_min" src="'+data.sender_image+'" alt="User profile picture"><div class="chat_message_container chat_message_received"><small class="chat_user_time">'+data.chat_timestamp+'</small><span>'+data.message+'</span></div></div>');
      $(".chat_body").animate({ scrollTop: $('.chat_body').prop("scrollHeight")}, 1000);
    }

    var chatfound = false;
    $('.recent_chats .chat_user_info').each(function() {
      if($(this).data("user") == data.sender){
        if(current_recipient != data.sender){
          $(this).find('.chat_text').html('<span class="new_chat_message"><i class="fas fa-circle"></i></span>'+data.message);
        }else{
          $(this).find('.chat_text').html(data.message);
          markAsRead(current_recipient);
        }
        $(this).find('.chat_user_times_details').html(data.chat_timestamp);
        var elem_chat = $(this)[0].outerHTML;
        $('.recent_chats').prepend(elem_chat);
        $(this).remove();
        chatfound = true;
      }
    });
    if(!chatfound){
      $('.recent_chats').prepend('<div class="chat_user_info" data-user="'+data.sender+'"><div class="chat_user_image_container"><img class="chat_user_image" src="'+data.sender_image+'" alt="User profile picture"><span class="user_status user_status_online"><i class="fas fa-circle"></i></span></div><div class="chat_user_details"><span class="chat_user_name">'+data.sender_name+'</span><div class="chat_text"><span class="new_chat_message"><i class="fas fa-circle"></i></span>'+data.message+'</div></div><div class="chat_user_time"><span class="chat_user_times_details">'+data.chat_timestamp+'</span></div></div>');
    }

    var chat_notification = $('.unread_user_details_container[data-user="'+data.sender+'"]');
    if(chat_notification.length > 0){
      var user_msg_count = chat_notification.find("small").html().split(" ")[0];
      user_msg_count = parseInt(user_msg_count) + 1;
      var user_msg_count = chat_notification.find("small").html(user_msg_count + " unread messages");
    }else{
      var unread_user_image = data.sender_image;
      var unread_user_name = data.sender_name;
      $('.unread_chat_container').append('<form data-user="'+data.sender+'" action="../chat/index.php" method="post" class="dropdown-item unread_user_details_container" style="display: flex; align-items: center; cursor:pointer;" onclick="$(this).submit();"> <input type="text" name="chat_recipient_id" value="'+data.sender+'" hidden> <input type="text" name="chat_recipient_image" value="'+unread_user_image+'" hidden> <input type="text" name="chat_recipient_type" value="'+data.sender_user_type+'" hidden> <img src="'+unread_user_image+'" alt="User profile picture" style="height: 30px; width: 30px; border-radius: 50%;"> <div class="unread_user_details" style="margin-left: 10px; line-height: 20px;"> <span style="display: block; font-size: 14px"><b>'+unread_user_name+'</b></span> <small>1 unread messages</small> </div></form> <div class="dropdown-divider"></div>')
    }
    if($(".unread_chats_notification_count").html().split(" ")[0] == "No"){
      $(".unread_chats_notification_count").html("1 Unread Messages");
    }else{
      $(".unread_chats_notification_count").html(parseInt($(".unread_chats_notification_count").html().split(" ")[0]) + " Unread Messages");
    }
    if($(".unread_chats_notification .alert-show-message54").length == 0){
      $(".unread_chats_notification").append('<span class="alert-show-message54"></span>');
    }
  }
});
$(document).ready(function(){
  var presenceChannel = pusher.subscribe('presence-<?=PUSHER_APP_CHANNEL ?>');

  presenceChannel.bind("pusher:subscription_succeeded", function (members) {
    members.each(function(member) {
      var element_status = $('.chat_user_info[data-user="'+member.id+'"]');
      element_status.find(".user_status").addClass("user_status_online");
      if(element_status.hasClass('active')){
        $(".chat_receiver_status .user_status_chat").addClass("user_status_online");
        $(".chat_user_active").html("Active Now");
      }
    });
  });

  presenceChannel.bind("pusher:member_added", function(member){
    var element_status = $('.chat_user_info[data-user="'+member.id+'"]');
    element_status.find(".user_status").addClass("user_status_online");
    if(element_status.hasClass('active')){
      $(".chat_receiver_status .user_status_chat").addClass("user_status_online");
      $(".chat_user_active").html("Active Now");
    }
  });

  presenceChannel.bind("pusher:member_removed", function(member){
    var element_status = $('.chat_user_info[data-user="'+member.id+'"]');
    element_status.find(".user_status").removeClass("user_status_online");
    if(element_status.hasClass('active')){
      $(".chat_receiver_status .user_status_chat").removeClass("user_status_online");
      $(".chat_user_active").html("Offline");
    }
  });
});

</script>
