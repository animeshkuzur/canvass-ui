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

    <div class="page-wrapper no-padding">

      <div class="search-tabs">
        <div class="search-tab-item">
          <input type="radio" name="search" id="button" checked/>
          <label class="tab-label" for="button" onclick><span class="tab-label-text text-center">Asked</span></label>
        </div>
        <div class="search-tab-item">
          <input type="radio" name="search" id="button1"/>
          <label class="tab-label" for="button1" onclick></span><span class="tab-label-text text-center">Answered</span></label>
        </div>
      </div>

      <section class="container">
        <div class="row margintop-xxlg">
          <div class="col-md-3">
            <div class="profile-box static-box">
              <div class="intro">
                <div class="name">Himanshu Grover</div>
                <div class="email">himanshugrover773@gmail.com</div>
                <div class="member-since">Member Since 2017</div>
              </div>
              <div class="rank">
                <!-- <div><i class="ion-android-star"></i></div> -->
                <div class="rank-text">Rank</div>
                <div class="rank-number">2388</div>
              </div>
              <div class="stats">
                <div class="stats-item" data-toggle="tooltip" title="Questions Asked">
                  <img class="stats-icon" src="{{ asset('images/asked.svg') }}">
                  <div class="stats-number">24</div>
                </div>
                <div class="stats-item" data-toggle="tooltip" title="Questions Answered">
                  <img class="stats-icon" src="{{ asset('images/answered.svg') }}">
                  <div class="stats-number">59</div>
                </div>
                <div class="stats-item" data-toggle="tooltip" title="Votes Received">
                  <i class="ion-thumbsup stats-icon"></i>
                  <div class="stats-number">24</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9">

            <div class="questions-box"> 
              <div class="question-wrapper">
                <div class="row">

                  <div class="col-md-10"> 
                    <div class="question-content">
                      <a href="#"><div class="question">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores necessitatibus quos, libero pariatur ea voluptate</div></a>
                      <div class="question-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, commodi, ex. A modi, enim vitae. Odit saepe quae dolorem ab rerum maxime qui harum, hic, cupiditate ex eligendi porro, sed.</div>
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
                        </div>
                        <span class="time">
                          <i class="ion-clock paddingright-xs"></i>
                          <span>2017-07-12 10:02:53</span>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="question-category">
                      <i class="ion-android-bookmark icon"></i>
                      <div class="category-label">Category 1</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="question-wrapper">
                <div class="row">

                  <div class="col-md-10"> 
                    <div class="question-content">
                      <a href="#"><div class="question">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores necessitatibus quos, libero pariatur ea voluptate</div></a>
                      <div class="question-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, commodi, ex. A modi, enim vitae. Odit saepe quae dolorem ab rerum maxime qui harum, hic, cupiditate ex eligendi porro, sed.</div>
                      <div class="action-btn-group margintop-md">
                        <div class="actions">
                          <!-- Pass Class null in action-btn if no answers or votes -->
                          <a href="#">
                            <span class="number-answers action-btn null">
                              <i class="ion-android-textsms paddingright-xs"></i>
                              <span>5 Answers</span>
                            </span>
                          </a>
                          <a href="#">
                            <span class="votes action-btn null">
                              <i class="ion-arrow-up-c paddingright-xs"></i>
                              <span>43 Votes</span>
                            </span>
                          </a>
                        </div>
                        <span class="time">
                          <i class="ion-clock paddingright-xs"></i>
                          <span>2017-07-12 10:02:53</span>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="question-category">
                      <i class="ion-android-bookmark icon"></i>
                      <div class="category-label">Category 1</div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div> 
        </div>
        <!-- <label class="control control--checkbox">First checkbox
          <input type="checkbox" checked="checked"/>
          <div class="control--indicator"></div>
        </label> -->
      </section>
    </div>

@endsection

@section('script')
@endsection