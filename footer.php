				</div>
				<?php if ( !is_page() ): ?>
					<div class="col-md-3 col-sm-4 col-sm-offset-1 hidden-xs">
						<?php get_sidebar(); ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="row">
				<div class="col-sm-7 col-sm-offset-1">
					<footer>
						<p>
							© Alexander Woolley
							<?php //So that you don't need to update footer every year.
								$startYear = 2013; 
								$curYear = date('Y'); 
								echo $startYear . (($startYear != $curYear) ? ' – ' . $curYear : '');
							?>
						</p>
						<?php wp_footer(); ?>
					</footer>
				</div>
			</div>
		</div><!--/.container -->
	</body>
</html>