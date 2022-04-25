<?php
session_start();
if (isset($_GET['id'])) {
        $delete->delete('id', $_GET['id']);
        echo "<script>alert('Deleted!');</script>";
        }

if (isset($_POST['submit'])) {
        $record = $_POST;
        unset($record['submit']);
        $addoffer->add($record);
        echo "<script>alert('Added Sucessfully !');
               window.location.href='adminoffer';</script>";
}
?>
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
Vechiles Database
</div>
<div class="panel-body">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>#</th>
                <th>Offer Name</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $Offer = $Selectoffer->findAll();
            $count = 1;
            foreach ($Offer as $row) {
                echo '<tr id="'.$row['id'].'">';
                echo '<td>'.$count++.'</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['description'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
  <section id="form" style="margin-bottom: 10%; display: flex; flex-direction: row;">
<div ng-app="myApp">
  <div class="container" ng-controller="MedicalProfileCtrl">
        <medical-personal-info id="1" model="dataModel.personalInfo"></medical-personal-info>
  </div>
</div>
<template id="medicalPersonalInfoTemplate">
    <div>
    <div id="personalInfoViewPanel_{{id}}" tabindex="{{$id}}">
          <button id="btnAdd" class="btn btn-primary" type="button" class="profile__button" data-toggle="modal" ng-click="showEditModalFn(viewModel, '#personalInfoEditModal_'+id)"><i class="fa fa-plus-circle"></i>&nbsp; Add&nbsp;</button>
  <div class="modal fade" id="personalInfoEditModal_{{id}}" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-primary">Add Offer</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <form role="form" id="personalInfoEditForm_{{id}}" ng-submit="saveEditFn('#personalInfoEditModal_'+id)" action=" " method="POST" ng-init="fetchData()">
                <div class="col-md-6 col-xs-6">
                  <form-input label="labels.name" model="editModel.name" name="name"></form-input>
                  <form-input label="labels.desc" model="editModel.desc" name="description"></form-input>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" name="submit" class="btn btn-success" form="personalInfoEditForm_{{id}}">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</template>


<template id="displayTextTemplate">
  <h4><small>{{label}}</small><br>{{model}}</h4>
</template>

<template id="formInputTemplate">
  <div class="form-group">
    <label>{{label}}</label>
    <input class="form-control" ng-model="model">
  </div>
</template>
  <div  class="delete" style="margin-left: 1%;">
    <a id="dd" href=""><button style="background-color: #dc0d0d;" id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls"><i class="fa fa-minus-circle"></i>&nbsp; Delete&nbsp;</button></a>
    </div>
  </section>

<script>

$(document).ready(function() {

    $('#dataTables-example').DataTable({
            responsive: true
    });

        // Add event listener for opening and closing details
    var table = $('#dataTables-example').DataTable();
 
    $('#dataTables-example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            var cid= $(this).attr('id');
            $('#dd').attr("href", "adminoffer&id="+cid);
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');


        }
    } );
 
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );

});
</script>

<script type="text/javascript">
    console.clear();

var myApp = angular.module('myApp', []);

myApp.controller('MedicalProfileCtrl', function($scope){
    $scope.dataModel = {
        personalInfo: {
            'name': '',
            'desc': '',
        }
    };
 });

myApp.directive('medicalPersonalInfo', function(){
    return {
        scope: {
            model: "=",
            id: "="
        },
        link: function(scope){
            var labels = {
                name: "Offer Name",
                desc: "Description",
            };
            
            // models
            angular.extend(scope, {
                labels: labels,
                viewModel: scope.model,
                editModel: {}
            });
            
            // automatically update viewModel if model change
            scope.$watch('model', function(newVal, oldVal){
                scope.viewModel = scope.model;
            });
            
            // methods
            angular.extend(scope, {
                showEditModalFn: function(viewModel, editModalId){
                    scope.editModel = viewModel ? angular.copy(viewModel) : {};
                    $(editModalId).modal('toggle');
                },
                saveEditFn: function(editModalId){
                    // pass data back
                    scope.model = angular.copy(scope.editModel);
                    
                    // clean UI
                    $(editModalId).modal('toggle');
                }
            });
        },
        template: $("#medicalPersonalInfoTemplate").html(),
        replace: true
    };
});

myApp.directive('displayText', function(){
    return {
        scope: {
            label: "=",
            model: "="
        },
        template: $("#displayTextTemplate").html(),
        replace: true
    }
});

myApp.directive('formInput', function(){
    return {
        scope: {
            label: "=",
            model: "=",
            type: "@",
            title: "@",
            name:"@"
        },
        link: function(scope, element, attributes){
            if (scope.name){ element.find("input").attr("name", scope.name); }
            if (scope.type){ element.find("input").attr("type", scope.type); }
            if (scope.title){ element.find("input").attr("title", scope.title); }
        },
        template: $("#formInputTemplate").html(),
        replace: true
    }
});
</script>