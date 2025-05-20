@extends('layout')

@section('content')

        <!-- Main content -->
        <main class="col-md-10 ms-sm-auto px-md-4 py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h4">Bienvenido al sistema de facturación</h2>
                <button class="btn btn-primary">Nueva Factura</button>
            </div>

            <!-- Tarjetas resumen -->
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card text-white bg-primary rounded-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Ventas hoy</h5>
                            <p class="card-text fs-4">$1,250.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card text-white bg-success rounded-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Productos</h5>
                            <p class="card-text fs-4">124</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card text-white bg-warning rounded-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Clientes</h5>
                            <p class="card-text fs-4">38</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card text-white bg-danger rounded-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Facturas</h5>
                            <p class="card-text fs-4">87</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabla de facturas recientes -->
            <div class="card mt-4 shadow rounded-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Facturas recientes</h5>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Cliente</th>
                                <th>Fecha</th>
                                <th>Total</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>00123</td>
                                <td>Juan Pérez</td>
                                <td>2025-05-19</td>
                                <td>$320.00</td>
                                <td><span class="badge bg-success">Pagada</span></td>
                            </tr>
                            <tr>
                                <td>00122</td>
                                <td>Ana López</td>
                                <td>2025-05-18</td>
                                <td>$150.00</td>
                                <td><span class="badge bg-danger">Pendiente</span></td>
                            </tr>
                            <tr>
                                <td>00121</td>
                                <td>Carlos Ruiz</td>
                                <td>2025-05-18</td>
                                <td>$420.00</td>
                                <td><span class="badge bg-success">Pagada</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection     