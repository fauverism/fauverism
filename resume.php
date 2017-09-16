
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fauverism
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-md-12" role="main">

      <div class="resume">
        <h1>Resume of Robert E. Fauver</h1>
        <small>Last updated June 30<sup>th</sup>, 2017</small>
        <div class="row skills">
          <div class="col-md-3"></div>  
        </div>  
        <div class="row experience">
          <div class="col-md-12">
            <div class="row role company">
              <div class="col-md-9">
                <h3><em>Software Enigeer</em>, Comcast</h3>
              </div>
              <div class="col-md-3">
                <h5>Jan. 2015 &em; Present</h5>
              </div>
            </div>
            <div class="row description">
              <div class="col-md-12">
                <p>Work in site relability eng group, types of apps, what they do, </p>
              </div>
            </div>
            <div class="row description">
              <div class="col-md-6">
                <ul>
                  <li>Technology</li>
                  <li>Lorem</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul>
                  <li>Ipsum</li>
                  <li>Dolor</li>
                </ul>
              </div>
            </div>
          </div>
          <!--Timeline?
          Business, Location, timeframe, short description, duties
         Data Visualizations -->
        </div>  
        <div class="row education">
         
        </div>  
        <div class="row social">
         
        </div>  
        <div class="row contact">
         
        </div>  
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
