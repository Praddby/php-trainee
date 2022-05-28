
<div class="container">
	<?php include('addTaskForm.php'); ?>

	<ul class="tasks" id="tasks">
		<?php
			$todo = $pdo->query("SELECT * FROM todo");
			$doneTasks = [];

			foreach($todo as $row) {
					if(!$row['completed']) {
						echo "
							<li class=\"task\">
								{$row['name']}
							</li>
						";
					} else {
						$doneTasks[] = $row['name'];
					}
			}
			foreach($doneTasks as $task) {
					echo "
						<li class=\"task\">
							<p class=\"task-done\">$task</p>
						</li>
					";
			}
		?>
	</ul>
</div>