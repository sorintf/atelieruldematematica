<?php 
	/**
		* T&F
	*/ 
?>
<?php include_once('views/_a_head.php'); ?>

<?php include_once('views/_a_header.php'); ?>

    <!-- [ Main Content 01 ] start -->
    <div class="pc-container">
        <div class="pc-content">

            <?php include_once('views/_a_breadcrumb.php'); ?>

            <!-- [ Main Content 02 ] start -->
            <div class="row">

                <?php include_once('views/_messages.php'); ?>

                <!-- [ clients-list-page ] start -->

                <div class="col-sm-12">
                    <div class="row my-3">
                        <div class="col">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 me-2">Agency Folders</h5>
                                <a href="#" class="avtar avtar-xs btn btn-primary rounded-circle p-0" data-bs-toggle="modal" data-bs-target="#modalAddFolder" data-type="agencyfolder" data-title="Add Agency Folder" data-parent="-1">
                                    <i class="ti ti-plus f-16"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php if ($adminFunctions->fileUploader): ?>
                        <div class="accordion card" id="accordionUploader">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUploader" aria-expanded="false" aria-controls="collapseUploader">
                                        Upload files with Drag and Drop [ autoProceed is on ]
                                    </button>
                                </h2>
                                <div id="collapseUploader" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionUploader">
                                    <div class="accordion-body">
                                        <div class="pc-uppy" id="pc-uppy-1" data-foderid="-1">
                                            <div class="pc-uppy-dashboard"></div>
                                            <div class="pc-uppy-progress"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFormUploader" aria-expanded="false" aria-controls="collapseFormUploader">
                                        Upload files with the usual way [ form ]
                                    </button>
                                </h2>
                                <div id="collapseFormUploader" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionUploader">
                                    <div class="accordion-body">
                                        <form action="" method="post" class="needs-validation formCuFisier" enctype="multipart/form-data" novalidate>
                                            <div class="form-group">
                                                <label for="formFile" class="form-label">Select the file</label>
                                                <input class="form-control" type="file" id="formFile" name="formFile[]" multiple>
                                            </div>

                                            <div class="form-group submit">
                                                <input type="hidden" name="id_folder" value="-1">
                                                <input type="hidden" name="source" value="<?php echo $adminFunctions->view; ?>">
                                                <input type="submit" name="upload_files" class="btn btn-primary" value="Upload">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>

                    <div class="row my-3">
                        <div class="col"></div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-primary d-inline-flex multiple-dl-toggler">
                                <i class="ti ti-download me-1"></i>
                                Multiple downloads
                            </button>

                            <button type="button" class="btn btn-danger d-none clearall">
                                <i class="ti ti-mask-off me-1"></i>
                                Clear selection
                            </button>
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col"></div>
                        <div class="col-auto">
                            <ul class="nav nav-pills nav-files" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link listview-toggler" data-target=".lists" data-aclass="list-cards" data-rclass="grid-cards">
                                        <i class="ti ti-layout-grid"></i>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active listview-toggler" data-target=".lists" data-aclass="grid-cards" data-rclass="list-cards">
                                        <i class="ti ti-layout-list"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <form action="" method="post" class="needs-validation dl-list" novalidate>
                        <div class="row lists grid-cards">
                            <?php foreach ($adminFunctions->rep['list'] as $key => $value): ?>
                                <?php if (isset($value['nr_files'])): ?>
                                    <div class="wrap-card">
                                        <div class="card card-file t01 selectable">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="favorite <?php echo (in_array($value['ID'], $adminFunctions->rep['favorite_file_ids']))?'text-warning':'text-secondary'; ?>" data-idfile="<?php echo $value['ID']; ?>" data-idusr="<?php echo $adminFunctions->ID; ?>">
                                                        <svg class="pc-icon">
                                                            <use xlink:href="#custom-setting-2"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="thumbnail">
                                                        <svg class="pc-icon wid-40 hei-40 text-warning">
                                                            <use xlink:href="#custom-folder-open"></use>
                                                        </svg>
                                                        <div class="form-check">
                                                            <input class="form-check-input input-success wid-40 hei-40" name="dl_list[]" type="checkbox" value="<?php echo $value['ID']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="name">
                                                        <h5 class="mb-1 text-truncate">
                                                            <a href="<?php echo $adminFunctions->buildUrl(array('view'=>'a_files_folders_view', 'id_file'=>$value['ID'])); ?>" class="">
                                                                <span class="text-truncate w-100"><?php echo $value['name']; ?></span>
                                                            </a>
                                                        </h5>
                                                        <p class="mb-0"><small><?php echo $value['nr_files']; ?> folders and files</small></p>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a
                                                        class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                                        href="#"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                        ><i class="material-icons-two-tone f-18">more_vert</i></a
                                                        >
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalRenameFolder" data-name="<?php echo $value['name']; ?>" data-title="Rename <?php echo $value['name']; ?>" data-idfile="<?php echo $value['ID']; ?>">Rename</a>
                                                            <a class="dropdown-item" href="<?php echo $adminFunctions->buildUrl(array('view'=>'a_files_folders_delete', 'id_file'=>$value['ID'])); ?>">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>

                        <div class="row lists grid-cards">
                            <?php foreach ($adminFunctions->rep['list'] as $key => $value): ?>
                                <?php if (!isset($value['nr_files'])): ?>
                                    <div class="wrap-card">
                                        <div class="card card-file t02 selectable">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="favorite <?php echo (in_array($value['ID'], $adminFunctions->rep['favorite_file_ids']))?'text-warning':'text-secondary'; ?>" data-idfile="<?php echo $value['ID']; ?>" data-idusr="<?php echo $adminFunctions->ID; ?>">
                                                        <svg class="pc-icon">
                                                            <use xlink:href="#custom-setting-2"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="thumbnail">
                                                        <?php if (is_file($value['parent_path'].'/thumb-'.$value['slug'])): ?>
                                                            <a class="pc-icon" href="<?php echo $value['f_path']; ?>" data-toggle="lightbox" data-gallery="example-gallery">
                                                                <img src="<?php echo $value['parent_path'].'/thumb-'.$value['slug']; ?>" alt="">
                                                            </a>
                                                        <?php else: ?>
                                                            <svg class="pc-icon text-warning">
                                                                <use xlink:href="#custom-note-1"></use>
                                                            </svg>
                                                        <?php endif ?>

                                                        <div class="form-check">
                                                            <input class="form-check-input input-success wid-40 hei-40" name="dl_list[]" type="checkbox" value="<?php echo $value['ID']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="name">
                                                        <h5 class="mb-1 text-truncate"><?php echo $value['name']; ?></h5>
                                                        <p class="mb-0">
                                                            <small><?php echo round($value['size']/(1024*1024), 2).' Mb'; ?></small>
                                                        </p>
                                                    </div>

                                                    <div class="dropdown">
                                                        <a
                                                        class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                                        href="#"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                        ><i class="material-icons-two-tone f-18">more_vert</i></a
                                                        >
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalRenameFolder" data-name="<?php echo $value['name']; ?>" data-title="Rename <?php echo $value['name']; ?>" data-idfile="<?php echo $value['ID']; ?>">Rename</a>
                                                            <a class="dropdown-item" href="<?php echo $adminFunctions->buildUrl(array('view'=>'a_files_folders_delete', 'id_file'=>$value['ID'])); ?>">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <input type="hidden" name="id_folder" value="-1">
                                <button type="submit" class="btn btn-success d-none" name="download_archive">
                                    <i class="ti ti-download me-1"></i>
                                    Crează arhiva și downloadează
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- [ clients-list-page ] end -->
            </div>
            <!-- [ Main Content 02 ] end -->
        </div>
    </div>
    <!-- [ Main Content 01 ] end -->



<?php include_once('views/_a_footer.php'); ?>