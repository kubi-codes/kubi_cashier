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
                                <h1 class="h4 text-gray-900 mb-4">Konfigurasi Website</h1>
                            </div>
                            <form class="user" method="POST" action="<?= base_url('introduce/set/site') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="Name" name="site_name" placeholder="Nama Website" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="Tag" name="site_tagline" placeholder="Tagline">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="Url" name="site_url" placeholder="URL" required>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" id="Desc" name="site_desc" rows="3" placeholder="Deskripsi"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="Logo">Logo Web</label>
                                    <input type="file" id="Logo" class="d-block" name="site_logo">
                                </div>

                                <div class="form-group">
                                    <label for="Icon">Icon Web (16px x 16px)</label>
                                    <input type="file" id="Icon" class="d-block" name="site_icon">
                                </div>

                                <button type="submit" href="login.html" class="btn btn-primary btn-user btn-block">
                                    Selesai
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>