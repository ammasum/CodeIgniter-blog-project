<div class="post-update-form" ng-controller="postController">
    <p class="post-create-form-title">Create Post</p>
    <?php
        echo form_open_multipart('post/create');
    ?>
        <div class="form-group">
            <input type="text" name="title" placeholder="Title" class="form-title-input form-control-plaintext">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" name="cat" ng-model="category" id="category">
                <option value="1">Development</option>
                <option value="2">E-Commerce</option>
            </select>
        </div>
        <div class="form-group">
            <label for="subCat">Sub Category</label>
            <select class="form-control" name="subCat" id="subCat">
                <option ng-repeat="x in subCat" ng-value="x.value">{{ x.name }}</option>
            </select>
        </div>
        <div class="form-group">
            <input type="file" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <textarea name="content" id="" cols="30" rows="10" class="form-content-input" placeholder="Content"></textarea>
        </div>
        <button class="btn btn-primary">SUBMIT</button>
    <?php
        echo form_close();
    ?>
</div>

<script>
    var subCatList = [
        [
            {
                name: "Select one"
            }
        ],
        [
            {
                name: "Nodejs",
                value: "1"
            },
            {
                name: "PHP",
                value: "2"
            }
        ],
        [
            {
                name: "Ebay",
                value: "1"
            },
            {
                name: "Amazon",
                value: "2"
            }
        ]
    ];

    const myApp = angular.module('myApp', ['ngMessages','ngResource']);

    myApp.controller('postController', ($scope,$filter)=>{
        $scope.category = 0;
        $scope.subCat = [];
        $scope.$watch('category', ()=>{
            $scope.subCat = [...subCatList[parseInt($scope.category)]]
        });
    });

</script>