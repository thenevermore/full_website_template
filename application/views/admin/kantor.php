<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: THENEVERMORE
 * Date: 2/17/2016
 * Time: 2:35 PM
 */
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class ="panel-heading">
                    Data Kantor Regional
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>NOPEN KANTOR</th>
                                <th>NAMA KANTOR</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($kantor as $office) {
                                ?>
                                <tr>
                                    <td><a href="<?php echo site_url('kantor/'.$office['IDKANTOR']); ?>"> <?php echo $office['IDKANTOR']; ?> </a></td>
                                    <td> <?php echo $office['KANTOR']; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>