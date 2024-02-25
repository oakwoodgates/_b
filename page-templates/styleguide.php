<?php

/**
 * Template Name: Style Guide
 * Template Post Type: page
 * 
 */

get_header();

function oakwood_docsref( $path = '' ) {
	return '<a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.3/' . $path . '">Documentation</a>';
}

function oakwood_sg_header( $title = '', $path = '' ) {
	return '<div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
	<h3>' . $title . '</h3>
	' . oakwood_docsref( $path ) . '
	</div>';
}

function oakwood_sg_colors() {
	return [
		'primary',
		'secondary',
		'info',
		'success',
		'warning',
		'danger',
		'light',
		'dark'
	];
}
?>

<main id="primary" class="site-main container-fluid">

	<?php
	while (have_posts()) :
		the_post();
		?>

		<aside class="bd-aside sticky-xl-top text-body-secondary align-self-start mb-3 mb-xl-5 px-2">
			<h2 class="h6 pt-4 pb-3 mb-4 border-bottom">On this page</h2>
			<nav class="small" id="toc">
				<ul class="list-unstyled">
					<li class="my-2">
						<button type="button" class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">Contents</button>
						<ul class="list-unstyled ps-3 collapse" id="contents-collapse">
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#typography">Typography</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#images">Images</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#tables">Tables</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#figures">Figures</a></li>
						</ul>
					</li>
					<li class="my-2">
						<button type="button" class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#forms-collapse" aria-controls="forms-collapse">Forms</button>
						<ul class="list-unstyled ps-3 collapse" id="forms-collapse">
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#overview">Overview</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#disabled-forms">Disabled forms</a></li>
						</ul>
					</li>
					<li class="my-2">
						<button type="button" class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#components-collapse" aria-controls="components-collapse">Components</button>
						<ul class="list-unstyled ps-3 collapse" id="components-collapse">
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#accordion">Accordion</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#alerts">Alerts</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#badge">Badge</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#breadcrumb">Breadcrumb</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#buttons">Buttons</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#button-group">Button group</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#card">Card</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#carousel">Carousel</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#dropdowns">Dropdowns</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#list-group">List group</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#modal">Modal</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#navs">Navs</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#navbar">Navbar</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#pagination">Pagination</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#popovers">Popovers</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#progress">Progress</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#scrollspy">Scrollspy</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#spinners">Spinners</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#toasts">Toasts</a></li>
							<li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#tooltips">Tooltips</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</aside>

		<div class="bd-cheatsheet container-fluid bg-body">

			<section id="content">
				<h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Contents</h2>
				<article class="my-3" id="typography">
					<?php echo oakwood_sg_header( 'Typography', 'content/typography' ) ?>
					<?php get_template_part( 'template-parts/styleguide/content/typography' ); ?>
				</article>
				<article class="my-3" id="images">
					<?php echo oakwood_sg_header( 'Images', 'content/images' ) ?>
					<div>
					</div>
				</article>
				<article class="my-3" id="tables">
					<?php echo oakwood_sg_header( 'Tables', 'content/tables' ) ?>
					<?php get_template_part( 'template-parts/styleguide/content/tables' ); ?>
				</article>
				<article class="my-3" id="figures">
					<?php echo oakwood_sg_header( 'Figures', 'content/figures' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguidecontent//figure' ); ?>
					</div>
				</article>
			</section>

			<section id="forms">
				<h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Forms</h2>
				<article class="my-3" id="overview">
					<?php echo oakwood_sg_header( 'Form 1', 'forms/overview' ) ?>
					<div>
					</div>
				</article>
				<article class="my-3" id="disabled-forms">
					<?php echo oakwood_sg_header( 'Disabled forms', 'forms/disabled-forms' ) ?>
					<div>
					</div>
				</article>

			</section>

			<section id="components">
				<h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Components</h2>
				<article class="my-3" id="accordion">
					<?php echo oakwood_sg_header( 'Accordion', 'components/accordion' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/accordion' ); ?>
					</div>
				</article>
				<article class="my-3" id="alerts">
					<?php echo oakwood_sg_header( 'Alerts', 'components/alerts' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/alerts' ); ?>
					</div>
				</article>
				<article class="my-3" id="badge">
					<?php echo oakwood_sg_header( 'Badge', 'components/badge' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/badge' ); ?>
					</div>
				</article>
				<article class="my-3" id="breadcrumb">
					<?php echo oakwood_sg_header( 'Breadcrumb', 'components/breadcrumb' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/breadcrumb' ); ?>
					</div>
				</article>
				<article class="my-3" id="buttons">
					<?php echo oakwood_sg_header( 'Buttons', 'components/buttons' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/buttons' ); ?>
					</div>
				</article>
				<article class="my-3" id="button-group">
					<?php echo oakwood_sg_header( 'Button group', 'components/button-group' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/button-group' ); ?>
					</div>
				</article>
				<article class="my-3" id="card">
					<?php echo oakwood_sg_header( 'Card', 'components/card' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/card' ); ?>
					</div>
				</article>
				<article class="my-3" id="carousel">
					<?php echo oakwood_sg_header( 'Carousel', 'components/carousel' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/carousel' ); ?>
					</div>
				</article>
				<article class="my-3" id="dropdowns">
					<?php echo oakwood_sg_header( 'Dropdowns', 'components/dropdowns' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/dropdowns' ); ?>
					</div>
				</article>
				<article class="my-3" id="list-group">
					<?php echo oakwood_sg_header( 'List group', 'components/list-group' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/list-group' ); ?>
					</div>
				</article>
				<article class="my-3" id="modal">
					<?php echo oakwood_sg_header( 'Modal', 'components/modal' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/modal' ); ?>
					</div>
				</article>
				<article class="my-3" id="navs">
					<?php echo oakwood_sg_header( 'Navs', 'components/navs' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/navs' ); ?>
					</div>
				</article>
				<article class="my-3" id="pagination">
					<?php echo oakwood_sg_header( 'Pagination', 'components/pagination' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/pagination' ); ?>
					</div>
				</article>
				<article class="my-3" id="popovers">
					<?php echo oakwood_sg_header( 'Popovers', 'components/popovers' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/popovers' ); ?>
					</div>
				</article>
				<article class="my-3" id="progress">
					<?php echo oakwood_sg_header( 'Progress', 'components/progress' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/progress' ); ?>
					</div>
				</article>
				<article class="my-3" id="scrollspy">
					<?php echo oakwood_sg_header( 'Scrollspy', 'components/scrollspy' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/scrollspy' ); ?>
					</div>
				</article>
				<article class="my-3" id="spinners">
					<?php echo oakwood_sg_header( 'Spinners', 'components/spinners' ) ?>

					<div>
						{{< spinner.inline >}}
						{{- range (index $.Site.Data "theme-colors") }}
						<div class="spinner-border text-{{ .name }}" role="status">
							<span class="visually-hidden">Loading...</span>
						</div>
						{{- end -}}
						{{< /spinner.inline >}}

						{{< spinner.inline >}}
						{{- range (index $.Site.Data "theme-colors") }}
						<div class="spinner-grow text-{{ .name }}" role="status">
							<span class="visually-hidden">Loading...</span>
						</div>
						{{- end -}}
						{{< /spinner.inline >}}
					</div>
				</article>
				<article class="my-3" id="toasts">
					<?php echo oakwood_sg_header( 'Toasts', 'components/toasts' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/toasts' ); ?>
					</div>
				</article>
				<article class="mt-3 mb-5 pb-5" id="tooltips">
					<?php echo oakwood_sg_header( 'Tooltips', 'components/tooltips' ) ?>
					<div>
						<?php get_template_part( 'template-parts/styleguide/components/tooltips' ); ?>
					</div>
				</article>
			</section>
		</div>

		<style>
			body {
				scroll-behavior: smooth;
			}

			/**
			* Bootstrap "Journal code" icon
			* @link https://icons.getbootstrap.com/icons/journal-code/
			*/
			.bd-heading a::before {
				display: inline-block;
				width: 1em;
				height: 1em;
				margin-right: .25rem;
				content: "";
				background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23999' viewBox='0 0 16 16'%3E%3Cpath d='M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1H2a2 2 0 0 1 2-2z'/%3E%3Cpath d='M2 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2z'/%3E%3Cpath fill-rule='evenodd' d='M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708z'/%3E%3C/svg%3E");
				background-size: 1em;
			}

			/* Table of contents */
			.bd-aside a {
				padding: .1875rem .5rem;
				margin-top: .125rem;
				margin-left: .3125rem;
				color: var(--bs-body-color);
			}

			.bd-aside a:hover,
			.bd-aside a:focus {
				color: var(--bs-body-color);
				background-color: rgba(121, 82, 179, .1);
			}

			.bd-aside .active {
				font-weight: 600;
				color: var(--bs-body-color);
			}

			.bd-aside .btn {
				padding: .25rem .5rem;
				font-weight: 600;
				color: var(--bs-body-color);
			}

			.bd-aside .btn:hover,
			.bd-aside .btn:focus {
				color: var(--bs-body-color);
				background-color: rgba(121, 82, 179, .1);
			}

			.bd-aside .btn:focus {
				box-shadow: 0 0 0 1px rgba(121, 82, 179, .7);
			}

			.bd-aside .btn::before {
				width: 1.25em;
				line-height: 0;
				content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ccc' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
				transition: transform .35s ease;

				/* rtl:raw:
				transform: rotate(180deg) translateX(-2px);
				*/
				transform-origin: .5em 50%;
			}

			.bd-aside .btn[aria-expanded="true"]::before {
				transform: rotate(90deg)
					/* rtl:ignore */
				;
			}


			/* Examples */
			.scrollspy-example {
				height: 200px;
			}

			[id="modal"] .bd-example .btn,
			[id="buttons"] .bd-example .btn,
			[id="tooltips"] .bd-example .btn,
			[id="popovers"] .bd-example .btn,
			[id="dropdowns"] .bd-example .btn-group,
			[id="dropdowns"] .bd-example .dropdown,
			[id="dropdowns"] .bd-example .dropup,
			[id="dropdowns"] .bd-example .dropend,
			[id="dropdowns"] .bd-example .dropstart {
				margin: 0 1rem 1rem 0;
			}

			/* Layout */
			@media (min-width: 1200px) {
				main {
					display: grid;
					grid-template-rows: auto;
					grid-template-columns: 1fr 4fr 1fr;
					gap: 1rem;
				}

				.bd-header {
					position: fixed;
					top: 0;
					/* rtl:begin:ignore */
					right: 0;
					left: 0;
					/* rtl:end:ignore */
					z-index: 1030;
					grid-column: 1 / span 3;
				}

				.bd-aside,
				.bd-cheatsheet {
					padding-top: 4rem;
				}

				/**
				 * 1. Too bad only Firefox supports subgrids ATM
				 */
				.bd-cheatsheet,
				.bd-cheatsheet section,
				.bd-cheatsheet article {
					display: inherit;
					/* 1 */
					grid-template-rows: auto;
					grid-template-columns: 1fr 4fr;
					grid-column: 1 / span 2;
					gap: inherit;
					/* 1 */
				}

				.bd-aside {
					grid-area: 1 / 3;
					scroll-margin-top: 4rem;
				}

				.bd-cheatsheet section,
				.bd-cheatsheet section>h2 {
					top: 2rem;
					scroll-margin-top: 2rem;
				}

				.bd-cheatsheet section>h2::before {
					position: absolute;
					/* rtl:begin:ignore */
					top: 0;
					right: 0;
					bottom: -2rem;
					left: 0;
					/* rtl:end:ignore */
					z-index: -1;
					content: "";
				}

				.bd-cheatsheet article,
				.bd-cheatsheet .bd-heading {
					top: 8rem;
					scroll-margin-top: 8rem;
				}

				.bd-cheatsheet .bd-heading {
					z-index: 1;
				}
			}
		</style>
	<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
