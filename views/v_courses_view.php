<div class="row">

	<!-- left column-->
	<h1><?= $course["title"]; ?></h1>
	<div class="col-sm-8 well">
		<div class="pull-left">
			<a href="/courses/enroll/<?= $course["url"]; ?>">
				<img alt="Course logo" class="course-logo img-responsive" src="/img/<?= $course["logo"]; ?>">
			</a>
		</div>
		<p>
			<?= $course["about"]; ?>
		</p>
		<div class="clearfix"></div>
		<ol>
			<? foreach($contents as $content): ?>
			<li>
				<h4> <?= $content["title"]; ?> </h4>
			<? endforeach; ?>
		</ol>
		<p>
			<a href="/courses/enroll/<?= $course["url"]; ?>" class="btn btn-success btn-lg">Enroll in Course</a>
		</p>
	</div>
</div> <!--/.row-->