<?php
// show error của request
function ShowErr( $errors,$name){
    if ($errors->has($name)){
       echo '<div class="alert alert-danger" role="alert">';
        echo '<strong>'.$errors->first($name).'</strong>';
        echo '</div>';
    }
}

// show category phần choose
function ShowCate($data,$parent,$shift){
    foreach ($data as $row) {
        if ($row->parent==$parent) {
            echo "<option value='$row->id'>".$shift.$row['name']."</option>";
            ShowCate($data,$row->id,$shift.'--|');

        }
    }
}

// show bên trái ra category
// show category
function ShowCateLeft($data,$parent,$shift){
    foreach ($data as $row) {
        if ($row->parent==$parent) {
            echo "<div class='item-menu'><span>".$shift.$row->name."</span>
            <div class='category-fix'>
                <a class='btn-category btn-primary' href='editcategory.html'><i class='fa fa-edit'></i></a>
                <a class='btn-category btn-danger' href='#'><i class='fas fa-times'></i></i></a>
            </div>
        </div>";
            ShowCateLeft($data,$row->id,$shift.'--|');

        }
    }
}
