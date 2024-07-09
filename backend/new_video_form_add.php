<?php session_start(); ?>
<?php include 'bootst.php'; ?>
<meta charset="UTF-8">

<?php
error_reporting(error_reporting() & ~E_NOTICE);

include 'connections.php';
$query = "SELECT * FROM new_video_tbl ORDER BY video_id asc" or die("Error");
$result = mysqli_query($con, $query);
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->

<body>
	<div class="container">
		<div class="row">

		</div>
		<div class="row">
			<div class="col-md-5">

			</div>
			<div class="col-md-12">
				<form id="upload_Form" name="video" action="new_video_form_add_db.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-3"> </div>
						<div class="col-sm-5" align="center">
							<br>
							<h3> เพิ่มวิดีโอ </h3>

						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3"> </div>
						<div class="col-sm-5" align="left">

						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-3" align="right">ชื่อวิดีโอ</div>
						<div class="col-sm-5" align="left">


							<input id="video_name" name="video_name" type="text" required class="form-control" required placeholder="ภาษาอังกฤษหรือภาษาไทย" />

						</div>
					</div>



					<div class="form-group">
						<div class="col-sm-3" align="right"> วิดีโอ </div>
						<div class="col-sm-5" align="left">

							<input type="file" name="video_link" id="video_link" class="form-control" />

						</div>
					</div>

					<div  class="form-group">
						<div id="progressbar_box" class="progress d-none" style="display: none !important;">
							<div id="progressbar_upload" class="progress-bar bg-warning progress-bar-animated" role="progressbar" style="width: 0%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-3"> </div>
						<div class="col-sm-6">
							<button type="submit" class="btn btn-danger" id="btn_upload"> <i class="glyphicon glyphicon-open"></i> อัพโหลด </button>
							<span id="upload_status" class="font-weight-bold d-none"></span>
						</div>

					</div>
				</form>
			</div>
		</div>

	</div>
	
	<script>
		$(()=>{

			console.log("ready!")

		});
		$("#upload_Form").ajaxForm({
			beforeSend:() => {
				var progressVal = "0%";
				$("#progressbar_box").show();
				$("#progressbar_upload").width(progressVal);

			},
			uploadProgress:(event, position, total, percentComplete) => {

				event.preventDefault();
				var progressVal = percentComplete+"%";
				$("#progressbar_upload").width(progressVal);
				// console.log(percentComplete)
				$("#progressbar_upload").html(progressVal);
				$("#btn_upload").hide();
				$("#upload_status").html('กำลังอัพโหลด...').show();
			},
			complete:(xhr) => {
				$("#progressbar_box").hide();
				if(xhr.status == 200){
					// upload success
					$('#video_name').val("")
					$("#video_link").val(null)
					$("#upload_status").html('<i class="glyphicon glyphicon-ok"></i> กำลังอัพโหลด...').addClass('text-success');
					setTimeout(() => {
						window.location = 'new_video.php';
					},1100);
					// window.location('new_video.php');
					
				}else{
					alert("เกิดข้อผิดพลาดบางอย่าง !");
				}
			}
		})
	</script>
</body>