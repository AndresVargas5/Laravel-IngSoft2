<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index de Productos</title>
    <style>
        /* Incluye el CSS aquí */
        /* General Table Styles */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .table th, .table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        /* Striped Rows */
        .table tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        /* Table Head */
        .table thead th {
            background-color: #333;
            color: #fff;
            text-transform: uppercase;
        }

        /* Hover effect */
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Responsive Table */
        .table-responsive {
            overflow-x: auto;
        }

        /* Responsive Table for Smaller Screens */
        @media screen and (max-width: 600px) {
            .table thead {
                display: none;
            }

            .table, .table tbody, .table tr, .table td {
                display: block;
                width: 100%;
            }

            .table tr {
                margin-bottom: 15px;
            }

            .table td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            .table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Index de Productos</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Proveedor</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td data-label="Codigo">{{$product->code}}</td>
                        <td data-label="Nombre">{{$product->name}}</td>
                        <td data-label="Precio">{{$product->price}}</td>
                        <td data-label="Cantidad">{{$product->ammount}}</td>
                        <td data-label="Proveedor">{{$product->supplier}}</td>
                        <td data-label="Descripcion">{{$product->description}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
