
       
<div class="container-fluid">
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear Enlace</h2>
        </div>
        <?= $this->Form->create($bookmark, ['novalidate']) ?>
        <fieldset>
            <?php
            echo $this->Form->control('title', ['label'=>'Título']);
            echo $this->Form->control('url',['type'=>'text','label'=>'Enlaces']);
            echo $this->Form->control('description',['label'=>'Descripción']);
           
           
        ?>
        </fieldset>
        
           <?= $this->Form->button('Crear',['class' => 'btn btn-outline-primary']) ?> 
          
       
        </div>
        
        
        <?= $this->Form->end() ?>
    </div>
</div> 
</div>   
   

