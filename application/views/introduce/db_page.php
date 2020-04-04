</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Konfigurasi Database</h1>
                            </div>
                            <form class="user" method="POST" action="<?= base_url('introduce/set/db') ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="Host" name="host" placeholder="Database Host" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="Username" name="username" placeholder="Database Username" required>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="Password" name="password" placeholder="Database Password">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="Name" name="name" placeholder="Database Name" required>
                                </div>

                                <button type="submit" href="login.html" class="btn btn-primary btn-user btn-block">
                                    Selanjutnya
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>