@extends('layout.master')

@section('style')
	<!--Custom Styles-->
	<link rel="stylesheet" type="text/css" href="#">
@endsection

@section('content')
	 <nav class="navbar navbar-fixed-top no-box-shadow">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Canvass</a>
        </div>
        <ul class="nav navbar-nav">
          <div class="technocrats-search" id="technocratsSearch">
            <div class="input-group">
              <input class="typeahead input" type="text" placeholder="States of USA">
              <div class="input-group-btn">
                <a class="search-button button btn btn-primary"><i class="ion-android-search"></i></a>
              </div>
            </div>
          </div>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a class="navbar-link" href="" data-toggle="modal" data-target="#askModal">Ask</a>
          </li>
          <li class="dropdown">
            <a class="navbar-link dropdown-toggle" data-toggle="dropdown" href="#">Himanshu
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <div class="page-wrapper">

      <section class="container">
        <div class="row">

          <div class="col-md-9">

            <div class="question-page-box"> 
              <div class="question-wrapper">
                <div class="question-content">
                  <div class="question">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores necessitatibus quos, libero pariatur ea voluptate</div>
                  <div class="question-tags">
                    <button class="btn-primary btn-outline">Tag 1</button>
                    <button class="btn-primary btn-outline">Tag two</button>
                    <button class="btn-primary btn-outline">Tag three</button> 
                  </div>
                  <div class="question-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quidem quia ducimus sint commodi molestias iste maxime atque iusto, amet, deserunt. Animi quidem sint adipisci debitis, minus facere veritatis obcaecati. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ea, necessitatibus laboriosam nemo laudantium quis nesciunt. Facere amet officia deleniti accusamus cupiditate blanditiis tempora ut fuga a! Possimus, laboriosam, modi.</div>
                  <div class="action-btn-group margintop-md">
                    <div class="actions">
                      <!-- Pass Class null in action-btn if no answers or votes -->
                      <a href="#">
                        <span class="number-answers action-btn">
                          <i class="ion-android-textsms paddingright-xs"></i>
                          <span>5 Answers</span>
                        </span>
                      </a>
                      <a href="#">
                        <span class="votes action-btn">
                          <i class="ion-arrow-up-c paddingright-xs"></i>
                          <span>43 Votes</span>
                        </span>
                      </a>
                      <a href="#" class="btn-primary btn-outline"><i class="ion-thumbsup paddingright-xs"></i>Upvote</a> 
                    </div>
                    <span class="time action-btn text-right">
                      <i class="ion-clock paddingright-xs"></i>
                      <span>2017-07-12 10:02:53</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="static-box answers-box margintop-md">
              <form class="answer-form">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea placeholder="Got something to say..." class="input form-control"></textarea>
                    <span class="help-block hidden"></span>
                  </div>
                </div>
                <div class="row submit">
                  <div class="col-md-12 form-group text-right">
                    <button type="submit" id="login_save" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
              <div class="answers-wrapper">

                <div class="answer-content">
                  <div class="answer-user">
                    <div class="name">Animesh Kuzur</div>
                    <span class="time"><i class="ion-clock paddingright-xs"></i>2017-07-12 10:02:53</span>
                  </div>
                  <div class="answer-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, commodi, ex. A modi, enim vitae. Odit saepe quae dolorem ab rerum maxime qui harum, hic, cupiditate ex eligendi porro, sed.</div>
                  <div class="action-btn-group margintop-md">
                    <div class="actions">
                      <!-- Pass Class null in action-btn if no votes -->
                      <a href="#">
                        <span class="votes action-btn">
                          <i class="ion-arrow-up-c paddingright-xs"></i>
                          <span>43 Votes</span>
                        </span>
                      </a>
                      <a href="#" class="btn-primary btn-outline"><i class="ion-thumbsup paddingright-xs"></i>Upvote</a> 
                    </div>
                    <span class="correct-soln"> 
                      <a href="#" class="btn-primary btn-outline marked"><i class="ion-checkmark paddingright-xs"></i>Correct Solution</a> 
                    </span>
                  </div>
                </div>


                <div class="answer-content">
                  <div class="answer-user">
                    <div class="name">Neha Jain</div>
                    <span class="time"><i class="ion-clock paddingright-xs"></i>2017-07-12 10:02:53</span>
                  </div>
                  <div class="answer-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, commodi, ex. A modi, enim vitae. Odit saepe quae dolorem ab rerum maxime qui harum, hic, cupiditate ex eligendi porro, sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, optio, voluptates rerum voluptatum voluptate obcaecati corrupti quia, odit quasi harum commodi. Dolorum voluptate maiores omnis praesentium dicta commodi minima unde.</div>
                  <div class="action-btn-group margintop-md">
                    <div class="actions">
                      <!-- Pass Class null in action-btn if no votes -->
                      <a href="#">
                        <span class="votes action-btn">
                          <i class="ion-arrow-up-c paddingright-xs"></i>
                          <span>43 Votes</span>
                        </span>
                      </a>
                      <a href="#" class="btn-primary btn-outline"><i class="ion-thumbsup paddingright-xs"></i>Upvote</a> 
                    </div>
                    <span class="correct-soln">
                      <a href="#" class="btn-primary btn-outline"><i class="ion-checkmark-circled paddingright-xs"></i>Mark as Correct Solution</a>
                    </span>
                  </div>
                </div>

              </div>

            </div>
          </div>

          <div class="col-md-3">
            <a>
              <div class="author-box static-box text-center">
                <i class="ion-person"></i>
                <div class="author-name">Himanshu Grover</div>
              </div>
            </a>

            <div class="chart static-box">
              <ul class="chart-inner" data-title="PHP">
                <li class="yes" style="transform: rotate(21.6deg)">
                  <span class="chart-label" style="transform: rotate(-21.6deg)">Yes</span>
                </li>
                <li class="neutral" style="transform: rotate(79.2deg)">
                  <span class="chart-label" style="transform: rotate(-79.2deg)">Neutral</span>
                </li>
                <li class="no" style="transform: rotate(180deg)">
                  <span class="chart-label" style="transform: rotate(-180deg)">No</span>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </section>
    </div>

@endsection

@section('script')
@endsection