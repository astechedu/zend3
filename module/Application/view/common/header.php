        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="<?= $this->url('home') ?>">
                        <img src="<?= $this->basePath('img/zf-logo-mark.svg') ?>" height="28" alt="Zend Framework <?= \Application\Module::VERSION ?>"/>&nbsp;Application
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= $this->url('home') ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= $this->url('home') ?>">Home <span class="sr-only">(current)</span></a>
                        </li>     
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= $this->url('home') ?>">Home <span class="sr-only">(current)</span></a>
                        </li>                                             
                    </ul>
                </div>
            </div>
        </nav>