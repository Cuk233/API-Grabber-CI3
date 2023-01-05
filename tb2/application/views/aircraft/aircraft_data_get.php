<?php
defined('BASEPATH') or exit('No direct script access allowed');
$revision_number = $this->input->post('revision_number');
// ubah string JSON menjadi array
?>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $judul; ?></title>
</head>

<body>

    <form method="post" action="<?php echo site_url('aircraft_data/insert/'); ?>">
        <br>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Revision Number</label>
            <div class="col-sm-2 ">
                <input type="number" name="revision_number" value="" class="form-control" required>
            </div>
        </div>
        <br>
        <a href="<?php echo site_url('aircraft_data/'); ?>" class="btn btn-danger">Kembali</a>
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary" href="<?php echo site_url('aircraft_data/submit2/' . $revision_number); ?>">
    </form>

</body>

</html>

</html>