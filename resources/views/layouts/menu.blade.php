<div class="col-md-3">
        <div class="card">
            <div class="card-header">Menüpontok</div>

            <div class="card-body">
                <a href=' {{ url("/home") }} '>Főoldal</a>
                <hr>

                <a href=' {{ url("/users") }} '>Felhasználók</a>
                <hr>

                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Állás
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href=' {{ url("/openjobs") }} '>Meghirdetett állások</a></li>
                        <li><a href=' {{ url("/jobapplication") }} '>Állásjelentkezések</a></li>
                    </ul>
                </div>
                <hr>

                <a href=' {{ url("/blogarticles") }} '>Blog</a>
                <hr>

                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">GDPR
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href=' {{ url("/gdprsettings") }} '>Beállítások</a></li>
                      <li><a href=' {{ url("/gdprstatistics") }} '>Statisztika</a></li>
                    </ul>
              </div>
            </div>
        </div>
    </div>