<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $this->load->view("includes/header") ?>
<div class="row">
		<div class="card-columns">

			<?php foreach ($mangketqua as $value): ?>
				<div class="card">
					
					<div class="card-block">
						<h4 class="card-title title"><?= $value['title'] ?></h4>
						<p class="card-text dicription"> <?= $value['dicription'] ?></p>
						<p class="card-text created_at"> <?= $value['created_at'] ?></p>
						<p class="card-text created_by"> <?= $value['created_by'] ?></p>
						<p class="card-text update_by"> <?=  $value['update_by'] ?></p>
                        <p class="card-text id_category"> <?=  $value['id_category'] ?></p>
                        <p class="card-text files"> <?=  $value['files'] ?></p>
                        <p class="card-text deleted"> <?=  $value['deleted'] ?></p> 	
					</div>

				</div>
			<?php endforeach; ?>
		</div>
	</div>
    <?php $this->load->view("includes/footer") ?>
<!-- <script type="text/javascript">
    $(document).ready(function () {
        var optionVisibility = false;
        if ("<?php echo ($can_edit_cosodulieuphapluat || $can_delete_cosodulieuphapluat); ?>") {
            optionVisibility = true;
        }

        $("#cosodulieuphapluat-table").appTable({
            source: '<?php echo_uri("cosodulieuphapluat/list_data") ?>',
            columns: [
                {title: '<?php echo lang("id") ?>', "class": "w50"},
                {title: '<?php echo lang("title") ?>'},
                {title: '<?php echo lang("dicription") ?>', "class": "w10p"},
               
                {title: '<?php echo lang("created_at") ?>', "class": "w10p", "iDataSort": 4},
         
                {title: '<?php echo lang("created_by") ?>', "class": "w10p", "iDataSort": 6},
                {title: '<?php echo lang("update_by") ?>', "class": "w10p"},
                {title: '<?php echo lang("id_category") ?>', "class": "w10p"},
                {title: '<?php echo lang("files") ?>', "class": "w10p"},
                {title: '<?php echo lang("deleted") ?>', "class": "w10p"}
                <?php echo $custom_field_headers; ?>,
                {visible: optionVisibility, title: '<i class="fa fa-bars"></i>', "class": "text-center option w100"}
            ],
        });
    });
</script> -->
</body>
</html>