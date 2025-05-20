@extends('layout')

@section('content')
   
        <!-- Main content -->
        <main class="col-md-10 ms-sm-auto px-md-4 py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h4">Inventario de Productos</h2>
                <button class="btn btn-success">Agregar Producto</button>
            </div>

            <!-- Tabla de inventario -->
            <div class="card shadow rounded-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Lista de productos</h5>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Producto</th>
                                <th>Categoría</th>
                                <th>Stock</th>
                                <th>Precio Unitario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Impresora Epson L3150</td>
                                <td>Electrónica</td>
                                <td>15</td>
                                <td>$120.00</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Papel Bond A4</td>
                                <td>Oficina</td>
                                <td>250</td>
                                <td>$0.12</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Teclado inalámbrico Logitech</td>
                                <td>Accesorios</td>
                                <td>32</td>
                                <td>$18.50</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection