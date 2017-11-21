@extends('template.head') @extends('template.nav') @section('content')


<div class="container-fluid bg-info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>
                    <span class="label label-warning" id="qid"></span>Qu'elle est ton centre d'interet</h3>
            </div>
            <div class="modal-body">
                <div class="col-xs-3 col-xs-offset-5">
                    <div id="loadbar" style="display: none;">
                        <div class="blockG" id="rotateG_01"></div>
                        <div class="blockG" id="rotateG_02"></div>
                        <div class="blockG" id="rotateG_03"></div>
                        <div class="blockG" id="rotateG_04"></div>
                        <div class="blockG" id="rotateG_05"></div>
                        <div class="blockG" id="rotateG_06"></div>
                        <div class="blockG" id="rotateG_07"></div>
                        <div class="blockG" id="rotateG_08"></div>
                    </div>
                </div>

            
                    <form method="POST" action="/store">
                        {{ csrf_field() }}
                        <label class="element-animation1 btn btn-lg btn-primary btn-block">
                            <span class="btn-label">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </span>
                            <input type="radio" name="q_answer" value="culinaire">culinaire</label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block">
                            <span class="btn-label">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </span>
                            <input type="radio" name="q_answer" value="sport">sport</label>
                        <label class="element-animation3 btn btn-lg btn-primary btn-block">
                            <span class="btn-label">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </span>
                            <input type="radio" name="q_answer" value="jeux">jeux </label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block">
                            <span class="btn-label">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </span>
                            <input type="radio" name="q_answer" value="jardinnage">jardinnage </label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block">
                            <span class="btn-label">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </span>
                            <input type="radio" name="q_answer" value="maquillage">maquillage </label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block">
                            <span class="btn-label">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </span>
                            <input type="radio" name="q_answer" value="entrepreunariat">entrepreunariat </label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block">
                            <span class="btn-label">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </span>
                            <input type="radio" name="q_answer" value="music">music </label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block">
                            <span class="btn-label">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </span>
                            <input type="radio" name="q_answer" value="culturelle">culturelle </label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block">
                            <span class="btn-label">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </span>
                            <input type="radio" name="q_answer" value="artistique">artistique </label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block">
                            <span class="btn-label">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </span>
                            <input type="radio" name="q_answer" value="Dilettante">Dilettante </label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block">
                            <span class="btn-label">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </span>
                            <input type="radio" name="q_answer" value="Monomaniaque">Monomaniaque </label>
                            <button type="submit" class="btn btn-default btn-login">GO</button>
                    </form>
                
            </div>
            <div class="modal-footer te xt-muted">
                <span id="answer"></span>
            </div>
        </div>
    </div>
</div>


@endsection @extends('template.footer')