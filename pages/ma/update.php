<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<title>Update</title>

<body>
    <input placeholder="Enter customer Id" type="text" value="13" />
    <br>
    <input type="button" class="btn btn-success" value="Submit" onclick="fetchData()" />
    <br><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Deal</th>
                <th>Offer</th>
                <th>Asset/Company Type</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody id="tableBody">

        </tbody>
    </table>
</body>
<script>
    function updateDetail(id, asset, offer, deal) {
        window.open("./update_buy_assets_real_estate.php");
    }

    function fetchData() {
        $.ajax({
            type: 'GET',
            url: '../../assets/php/getDeals.php',
            data: {
                // dealData: insertData
            },
            dataType: "json",
            success: function(data) {
                for (i = 0; i < data.length; i++) {
                    document.getElementById("tableBody").innerHTML += ` 
                        <tr>
                            <td>` + data[i]["DEAL"] + `</td>
                            <td>` + data[i]["OFFER"] + `</td>
                            <td>` + data[i]["ASSET_TYPE"] + `</td>
                            <td> 
                                    <input type="button" class="btn btn-submit" value="Update" 
                                    onclick= "updateDetail(` + data[i]["ID"] + `,'` + data[i]["ASSET_TYPE"] + `','` + data[i]["OFFER"] + `','` + data[i]["DEAL"] + `')">
                            </td>
                        </tr>
                    `;
                }
            }
        });
    }
</script>


</html>