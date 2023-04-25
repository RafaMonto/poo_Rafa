<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Interfaz</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/interfaz.css" />
    </head>
    <body style="
    background-image: url('https://volavi.co/wp-content/uploads/2006/05/Logo_Avianca_2020.jpg');
    background-repeat: no-repeat;
    background-size: 100%;

    ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container my-3">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 py-4">
                    <h2>ADD TICKET </h2>
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Id</label>
                            <input type="text" class="form-control" id="id" placeholder="identification card" autofocus />
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name"></input>
                        </div>
                        <div class="mb-3">
                            <label for="ln" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="ln" placeholder="Last Name"/>
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="mail" placeholder="Email"/>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pass" placeholder="Password"/>
                        </div>
                        <div class="mb-3">
                            <label for="pn" class="form-label">Phone number</label>
                            <input type="number" class="form-control" id="pn" placeholder="Phone number"/>
                        </div>
                        <div class="mb-3">
                            <label for="ori" class="form-label"> Origin</label>
                            <input type="text" class="form-control" id="ori" placeholder="Origin"/>
                        </div>
                        <div class="mb-3">
                            <label for="dss" class="form-label">Destiny</label>
                            <input type="text" class="form-control" id="dss" placeholder="Destiny"/>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success">Guardar</button>
                            <button class="btn btn-secondary">Limpiar</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 py-4">
                    <h2>Listado de lenguajes</h2>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th class="centrado">#</th>
                                <th class="centrado">Lenguaje</th>
                                <th class="centrado">Cantidad de programadores</th>
                                <th class="centrado">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="centrado">1</td>
                                <td class="centrado">JavaScript</td>
                                <td class="centrado">21</td>
                                <td class="centrado">
                                <a href="#" class="btn btn-warning mb-2">
                                <i class="bi bi-tv"></i> Ver</a>
                                <a href="#"class="btn btn-info mb-2"   title="Actualizar datos del alumno">
                                <i class="bi bi-arrow-clockwise"></i> Actualizar</a>
                                <a href="#"class="btn btn-danger mb-2" title="Borrar el alumno">
                                <i class="bi bi-trash"></i> Borrar</a> 
                                </td>
                            </tr>
                            <tr>
                                <td class="centrado">2</td>
                                <td class="centrado">Python</td>
                                <td class="centrado">110</td>
                                <td class="centrado">
                                <a href="#" class="btn btn-warning mb-2">
                                <i class="bi bi-tv"></i> Ver</a>
                                <a href="#"class="btn btn-info mb-2"   title="Actualizar datos del alumno">
                                <i class="bi bi-arrow-clockwise"></i> Actualizar</a>
                                <a href="#"class="btn btn-danger mb-2" title="Borrar el alumno">
                                <i class="bi bi-trash"></i> Borrar</a> 
                                </td>
                            </tr>
                            <tr>
                                <td class="centrado">3</td>
                                <td class="centrado">C#</td>
                                <td class="centrado">45</td>
                                <td class="centrado">
                                <a href="#" class="btn btn-warning mb-2">
                                <i class="bi bi-tv"></i> Ver</a>
                                <a href="#"class="btn btn-info mb-2"   title="Actualizar datos del alumno">
                                <i class="bi bi-arrow-clockwise"></i> Actualizar</a>
                                <a href="#"class="btn btn-danger mb-2" title="Borrar el alumno">
                                <i class="bi bi-trash"></i> Borrar</a> 
                                </td>
                            </tr>
                            <tr>
                                <td class="centrado">4</td>
                                <td class="centrado">Ruby</td>
                                <td class="centrado">31</td>
                                <td class="centrado">
                                <a href="#" class="btn btn-warning mb-2">
                                <i class="bi bi-tv"></i> Ver</a>
                                <a href="#"class="btn btn-info mb-2"   title="Actualizar datos del alumno">
                                <i class="bi bi-arrow-clockwise"></i> Actualizar</a>
                                <a href="#"class="btn btn-danger mb-2" title="Borrar el alumno">
                                <i class="bi bi-trash"></i> Borrar</a> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>