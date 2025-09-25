<!DOCTYPE html>
<html lang="lv">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Excel Stila Tabula</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f4f4f4;
    }
    .table-container {
        width: 100%;
        max-width: 800px; /* Tabulas maksimālais platums lapā */
        height: 400px;    /* Tabulas redzamais augstums lapā */
        overflow: auto;   /* Rāda scroll, ja saturs pārsniedz izmērus */
        border: 1px solid #ccc;
        background-color: white;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed; /* fiksēta kolonnu platuma shēma */
    }
    th, td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
        width: 33%; /* sadala trīs kolonnas vienādi */
    }
    th {
        background-color: #4CAF50;
        color: white;
        position: sticky; /* saglabā galveni redzamā augšpusē */
        top: 0;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #ddd;
    }
    caption {
        font-size: 1.2em;
        margin: 10px;
    }
</style>
</head>
<body>
<div class="table-container">
    <table>
        <caption>Excel Stila Tabula</caption>
        <thead>
            <tr>
                <th>Nosaukums</th>
                <th>Vecums</th>
                <th>Vieta</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>Jānis</td><td>25</td><td>Rīga</td></tr>
            <tr><td>Anna</td><td>30</td><td>Jelgava</td></tr>
            <tr><td>Pēteris</td><td>35</td><td>Liepāja</td></tr>
            <tr><td>Linda</td><td>28</td><td>Ventspils</td></tr>
            <tr><td>Artūrs</td><td>40</td><td>Daugavpils</td></tr>
            <tr><td>Kristīne</td><td>22</td><td>Jūrmala</td></tr>
            <tr><td>Edgars</td><td>33</td><td>Valmiera</td></tr>
        </tbody>
    </table>
</div>
</body>
</html>