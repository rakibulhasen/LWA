<?php
/**
 * The theme's index.php file.
 *
 * @package Avada
 * @subpackage Templates
 */
get_header();
?>


	<style>
        /* Hero Section */
        .hero {
            background: #ee3a43;
            color: white;
            padding: 80px 0 100px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg') center/cover;
            opacity: 0.1;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1rem;
            opacity: 1;
        }
		
		nav.breadcrumb a {
			color: #fff;
		}

		nav.breadcrumb {
			font-size: 16px;
		}

        .breadcrumb a {
            color: white;
            text-decoration: none;
            transition: opacity 0.3s ease;
        }

        .breadcrumb a:hover {
            opacity: 0.8;
        }

        .breadcrumb span {
            opacity: 0.9;
        }

        /* Main Container */
        .container {
            max-width: 1200px;
            margin: -0px auto 0;
            padding: 0 20px;
            position: relative;
            z-index: 3;
        }

        .content-wrapper {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
            align-items: start;
        }

        /* Main Content */
        .main-content {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
 /* Blog Grid - Exactly 2 columns */
        .blog-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .blog-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .blog-card-image {
            width: 100%;
            position: relative;
        }

        .blog-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .blog-card:hover .blog-card-image img {
            transform: scale(1.05);
        }

        .blog-card-content {
            padding: 25px;
        }

		.blog-date {
			color: #333;
			font-size: 16px;
			margin-bottom: 15px;
			display: flex;
			align-items: center;
			gap: 8px;
		}

        .date-icon {
            width: 16px;
            height: 16px;
            background: #28a745;
            border-radius: 3px;
        }

        .blog-card h3 {
            font-size: 1.4rem;
            font-weight: 600;
            color: #2c5282;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .blog-card h3 a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s ease;
        }
		
		.blog-card h3 a:hover {
			color: var( --e-global-color-primary ) !important;
		}

        .blog-excerpt {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .read-more {
            color: #4a90e2;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px !important;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: color 0.3s ease;
        }

        .read-more:hover {
            color: #2c5282;
        }

        .read-more::after {
            content: '→';
            transition: transform 0.3s ease;
        }

        .read-more:hover::after {
            transform: translateX(3px);
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 40px;
        }
		
		a.page-numbers {
			color: var( --e-global-color-primary );
		}
		
		.pagination .nav-links {
			 display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
		}
		
		.blog-card-content h3 a {
			color: #333!important;
			font-size: 22px !important;
			line-height: 1.5;
		}

        .pagination a,
        .pagination span {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .pagination a {
            background: #f8f9fa;
            color: #666;
            border: 1px solid #e9ecef;
        }

        .pagination a:hover {
            background: #4a90e2;
            color: white;
            border-color: #4a90e2;
        }

		.pagination .current {
			background: var( --e-global-color-primary );
			color: white;
			border: 1px solid var( --e-global-color-primary );
		}

		.pagination .current {
			background: var( --e-global-color-primary );
			color: white;
			border: 1px solid var( --e-global-color-primary );
		}

        .pagination .next:hover {
            background: #2c5282;
            border-color: #2c5282;
        }

        /* Sidebar */
        .sidebar_area {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .blog_widget {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .blog_widget-header {
            background: #6fb43f;
            color: white;
            padding: 20px;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .blog_widget-content {
            padding: 25px;
        }

        /* Search Widget */
        .search-form {
            display: flex;
            gap: 10px;
        }

        .search-input {
            flex: 1;
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: #4a90e2;
        }

        .search-btn {
            background: #6fb43f !important;
            color: white;
            border: none;
			border-color: #6fb43f !important;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        .search-btn:hover {
            background: #2c5282;
			color: #fff !important;
        }

        /* Categories Widget */
        .category-list {
            list-style: none;
        }

        .category-list li {
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .category-list li:last-child {
            border-bottom: none;
        }

        .category-list a {
            color: #666;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .category-list a:hover {
            color: #2c5282;
        }

        /* Recent Posts Widget */
        .recent-post {
            display: flex;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .recent-post:last-child {
            border-bottom: none;
        }

        .post-thumbnail {
            width: 80px;
            height: 60px;
            background: #e9ecef;
            border-radius: 8px;
            flex-shrink: 0;
            overflow: hidden;
        }

        .post-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .post-info h4 {
            font-size: 0.95rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
            line-height: 1.3;
        }

        .post-info a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .post-info a:hover {
            color: #2c5282;
        }

        .post-date {
            font-size: 0.85rem;
            color: #999;
			line-height:1.4;
        }
		
		.post-info h4 a {
			font-size: 16px;
			line-height: 1.5;
		}

        /* Responsive Design */
        @media (max-width: 1200px) {
            .hero h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 60px 0 80px;
            }
			
			.blog-grid {
				grid-template-columns: 1fr;
			}

            .hero h1 {
                font-size: 2.5rem;
            }

            .container {
                margin-top: -30px;
            }

            .content-wrapper {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .contact-info {
                flex-direction: column;
                gap: 10px;
            }

            .search-form {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2rem;
            }

            .company-header,
            .article-content,
            .blog_widget-content {
                padding: 20px;
            }
        }
		
		iframe#zqauYiC8aWAUybuyjsHz {
			min-height: 590px !important;
		}
    </style>
	<div id="primary" class="content-area">
		<div id="main_id" class="site-main">
			
			<div class="container">
				<div class="content-wrapper">
					<!-- Main Content -->
					<div class="main-content">
						<div class="blog-grid">
						<?php
						$blog_query = new WP_Query([
							'post_type' => 'post',
							'posts_per_page' => 6, // Change as needed
							'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
						]);

						if ($blog_query->have_posts()) :
							while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
					
								<article class="blog-card">
									<div class="blog-card-image">
										<?php if (has_post_thumbnail()) : ?>
											<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
											</a>
										<?php else : ?>
											<a href="<?php the_permalink(); ?>">
												<img src="https://via.placeholder.com/600x400?text=No+Image" alt="<?php the_title_attribute(); ?>">
											</a>
										<?php endif; ?>
									</div>
									<div class="blog-card-content">
										<div class="blog-date">
											<div class="date-icon"></div>
											<span><?php echo get_the_date('F j, Y'); ?></span>
										</div>
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<p class="blog-excerpt">
											<?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
										</p>
										<a href="<?php the_permalink(); ?>" class="read-more">READ MORE</a>
									</div>
								</article>
							
							<?php endwhile; ?>
							
					
						</div>
						<?php
							// Pagination (optional)
							the_posts_pagination([
								'mid_size' => 2,
								'prev_text' => __('« Prev'),
								'next_text' => __('Next »'),
							]);

							wp_reset_postdata();
						else : ?>
							<p>No blog posts found.</p>
						<?php endif; ?>
					</div>
					
					

					<!-- Sidebar -->
					<aside class="sidebar_area">
						<!-- Search Widget -->
						<div class="blog_widget">
							<div class="widget-content">
								<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
									<input type="text" class="search-input" name="s" value="<?php echo get_search_query(); ?>" placeholder="Search Here" />
									<button type="submit" class="search-btn">Search</button>
								</form>
							</div>
						</div>

						<!-- Categories Widget -->
						<div class="blog_widget">
							<div class="widget-header">Categories</div>
							<div class="widget-content">
								<ul class="category-list">
									<?php
									$categories = get_categories([
										'orderby' => 'name',
										'order'   => 'ASC',
										'hide_empty' => true, // Change to false if you want empty categories to show
									]);

									foreach ($categories as $category) {
										echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
									}
									?>
								</ul>

							</div>
						</div>

						<!-- Recent Posts Widget -->
						<div class="blog_widget">
							<div class="widget-header">Recent Posts</div>
							<div class="widget-content">
								

								<?php
								$recent_posts = new WP_Query([
									'posts_per_page' => 3, // Change the number as needed
									'post_status' => 'publish'
								]);

								if ($recent_posts->have_posts()) :
									while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
										<div class="recent-post">
											<div class="post-thumbnail">
												<?php if (has_post_thumbnail()) : ?>
													<a href="<?php the_permalink(); ?>">
														<?php the_post_thumbnail('thumbnail', ['alt' => get_the_title()]); ?>
													</a>
												<?php else : ?>
													<a href="<?php the_permalink(); ?>">
														<img src="https://via.placeholder.com/150x100?text=No+Image" alt="<?php the_title_attribute(); ?>">
													</a>
												<?php endif; ?>
											</div>
											<div class="post-info">
												<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
												<div class="post-date"><?php echo get_the_date('d M Y'); ?></div>
											</div>
										</div>
									<?php endwhile;
									wp_reset_postdata();
								endif;
								?>

							
							</div>
						</div>
						
						<!-- Survey Widget -->
						<div class="blog_widget">
							<div class="widget-header">Categories</div>
							<div class="widget-content">
								<iframe src="https://link.connectm8.com/widget/survey/zqauYiC8aWAUybuyjsHz" style="border:none;width:100%;" scrolling="no" id="zqauYiC8aWAUybuyjsHz" title="All-in-one Form BLOG BANNER"></iframe>
<script src="https://link.connectm8.com/js/form_embed.js"></script>

							</div>
						</div>
					</aside>
				</div>
			</div>
			

		</div><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
