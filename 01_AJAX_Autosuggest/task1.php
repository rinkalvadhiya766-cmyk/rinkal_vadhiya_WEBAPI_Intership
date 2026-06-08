<!DOCTYPE html>
<html>
<head>
<title>Internship Search</title>

<style>

body{
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    margin: 0;
    padding: 0;
    min-height: 100vh;
}

.container{
    width: 80%;
    margin: 40px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
}

h2{
    text-align: center;
    color: #333;
}

select{
    padding: 10px;
    width: 250px;
    border: 1px solid #ccc;
    border-radius: 5px;
    display: block;
    margin: 20px auto;
}

table{
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: white;
}

table, th, td{
    border: 1px solid #ddd;
}

th{
    background: #4facfe;
    color: white;
}

th, td{
    padding: 10px;
    text-align: center;
}

#result{
    margin-top: 20px;
}

</style>

<script>

function fetchData()
{
    var mode = document.getElementById("mode").value;

    var xhr = new XMLHttpRequest();

    xhr.open("POST","search.php",true);

    xhr.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
    );

    xhr.onreadystatechange = function()
    {
        if(xhr.readyState == 4 && xhr.status == 200)
        {
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    };

    xhr.send("mode=" + mode);
}

</script>

</head>

<body>

<div class="container">

<h2>Internship Search System</h2>

<select id="mode" onchange="fetchData()">
    <option value="">Select Mode</option>
    <option value="Online">Online</option>
    <option value="Onsite">Onsite</option>
    <option value="Hybrid">Hybrid</option>
</select>

<div id="result"></div>

</div>

</body>
</html>