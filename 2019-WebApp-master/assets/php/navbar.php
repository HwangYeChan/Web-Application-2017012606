<nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php"><img src="https://selab.hanyang.ac.kr/common/images/selab_logo_S.png" alt="Logo"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item <?php if ($currentpage === 'NOTICE') {echo ' active';} ?>">
                        <a class="btn nav-link <?php if ($currentpage === 'NOTICE') {echo ' btn-info';} ?>" href="notice.php">NOTICE</a>
                    </li>
                    <li class="nav-item <?php if ($currentpage === 'MEMBER') {echo ' active';} ?>">
                        <a class="btn nav-link <?php if ($currentpage === 'MEMBER') {echo ' btn-info';} ?>" href="member.php">MEMBER</a>
                    </li>
                    <li class="nav-item <?php if ($currentpage === 'RESEARCH') {echo ' active';} ?>">
                        <a class="btn nav-link <?php if ($currentpage === 'RESEARCH') {echo ' btn-info';} ?>" href="research.php">RESEARCH</a>
                    </li>
                    <li class="nav-item <?php if ($currentpage === 'PUBLICATION') {echo ' active';} ?>">
                        <a class="btn nav-link <?php if ($currentpage === 'PUBLICATION') {echo ' btn-info';} ?>" href="publication.php">PUBLICATION</a>
                    </li>
                    <li class="nav-item <?php if ($currentpage === 'COURSES') {echo ' active';} ?>">
                        <a class="btn nav-link <?php if ($currentpage === 'COURSES') {echo ' btn-info';} ?>" href="courses.php">COURSES</a>
                    </li>
                    <li class="nav-item dropdown <?php if ($currentpage === 'GALLARY') {echo ' active';} ?>">
                        <a class="btn nav-link dropdown-toggle <?php if ($currentpage === 'GALLARY') {echo ' btn-info';} ?>" id="gallary" href="#" data-toggle="dropdown">GALLARY</a>
                        <div class="dropdown-menu" aria-labelledby="gallary">
                            <a class="dropdown-item" href="gallary-con.php">Conference</a>
                            <a class="dropdown-item" href="gallary-SA.php#">Social Activity</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="gallary-etc.php">Etc..</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav login mr-auto">
                    <li class="nav-item <?php if ($currentpage === 'CONTACT') {echo ' active';} ?>">
                        <a class="btn nav-link <?php if ($currentpage === 'CONTACT') {echo ' btn-info';} ?>" href="contact.php">CONTACT</a>
                    </li>
                    <li class="nav-item <?php if ($currentpage === 'LOGIN') {echo ' active';} ?>">
                        <a class="btn nav-link <?php if ($currentpage === 'LOGIN') {echo ' btn-info';} ?>" href="login.php">LOGIN</a>
                    </li>
                </ul>
            </div>
        </nav>