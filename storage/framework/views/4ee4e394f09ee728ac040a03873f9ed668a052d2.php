<style>
    h5 {
        font-size: 12px;
    font-weight: 600;
    }
  .scbyaf {
    position: absolute;
    bottom: -40px;
    padding: 4px 15px;
    background: #7aba2f;
    color: #fff;
    font-size: 20px;
    border-radius: 6px;
    font-weight: bold;
}
    .scbyaftotalt1 {}
    
.form-group.col-6 {
    display: grid;
}
    
    span.stepa.activea {
    font-weight: bold;
    color: #000;
}

div .stepa {
    margin: 0px 15px;
    color: #ccd;
}
</style>

<div class="section-body">
    <div class="row mx-0 mt-5">
        <div class="col-md-10 mx-auto">
            <?php if(!empty($form->logo)): ?>
                <div class="text-center gallery gallery-md">
                    <img id="app-dark-logo" class="gallery-item float-none"
                        src="<?php echo e(asset('storage/app/' . $form->logo)); ?>" alt="form_logo">
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center w-100"><?php echo e($form->title); ?></h4>
                </div>
                <div>
                    <?php
                        $tb1_array_qn =array();
                        $tb1_array_ans =array();
                        $tb2_array_qn =array();
                        $tb2_array_ans =array();
                        $tb3_array_qn =array();
                        $tb3_array_ans =array();
                        $tb4_array_qn =array();
                        $tb4_array_ans =array();
                        $tb5_array_qn =array();
                        $tb5_array_ans =array();
                        $tb6_array_qn =array();
                        $tb6_array_ans =array();
                        $tb7_array_qn =array();
                        $tb7_array_ans =array();
                    ?>

                    <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($row->type == 'radio-group'): ?>
                                <?php
                                    $tb1 = array('q1-SA',
                                        'q2a-SA',
                                        'q2b1-SA',
                                        'q2b2-SA',
                                        'q2c-SA',
                                        'q2c1-SA',
                                        'q2d-SA',
                                        'q2d1-SA',
                                        'q3a1-SA',
                                        'q3a2-SA',
                                        'q3a3-SA',
                                        'q3b-SA',
                                        'q4a1-SA',
                                        'q4a2-SA',
                                        'q4b-SA',
                                        'q5a-SA',
                                        'q5b-SA',
                                        'q5c-SA',
                                        'q5d-SA',
                                        'q5e-SA',
                                        'q5f-SA',
                                        'q6a-SA',
                                        'q6b-SA',
                                        'q6c-SA',
                                        'q6d-SA',
                                        'q7a-SA',
                                        'q7b-SA',
                                        'q7c1-SA',
                                        'q7c2-SA',
                                        'q7c3-SA',
                                        'q7d-SA',
                                        'q7e-SA',
                                        'q7f-SA',
                                        'q7g-SA',
                                        'q8a-SA',
                                        'q8a1-SA',
                                        'q8b-SA',
                                        'q8c-SA');
                                    
                                    $tb2 = array('q9a-SA',
                                        'q9a1-SA',
                                        'q9b-SA',
                                        'q9c-SA',
                                        'q10a-SA',
                                        'q10a1-SA',
                                        'q10b-SA',
                                        'q10c-SA',
                                        'q10d-SA',
                                        'q10e-SA',
                                        'q11a-SA',
                                        'q11a1-SA',
                                        'q11b-SA',
                                        'q11b1-SA',
                                        'q11b2-SA',
                                        'q11c-SA',
                                        'q11c1-SA',
                                        'q11c2-SA',
                                        'q11c3-SA',
                                        'q11d-SA',
                                        'q11d1-SA',
                                        'q12a-SA',
                                        'q12b-SA',
                                        'q12c1-SA',
                                        'q12c1a-SA',
                                        'q12c2-SA',
                                        'q12c2a-SA',
                                        'q12c3-SA',
                                        'q12c3a-SA',
                                        'q13a-SA',
                                        'q13b-SA');

                                    $tb3 = array('q14-SA',
                                        'q14a-SA',
                                        'q15a-SA',
                                        'q15a1-SA',
                                        'q15a2n-SA',
                                        'q15a2p-SA',
                                        'q15b1-SA',
                                        'q15b1a-SA',
                                        'q15b2-SA',
                                        'q15b2a-SA',
                                        'q15b3-SA',
                                        'q15b3a-SA',
                                        'q16a-SA',
                                        'q16a1-SA',
                                        'q16a2-SA',
                                        'q16a3-SA',
                                        'q16a4-SA',
                                        'q16a5-SA',
                                        'q16b-SA',
                                        'q16b1-SA',
                                        'q16b2-SA',
                                        'q16b2a-SA',
                                        'q16b2b-SA',
                                        'q16c-SA',
                                        'q16c1-SA',
                                        'q16c2-SA',
                                        'q16c3-SA',
                                        'q16d-SA',
                                        'q16d1-SA',
                                        'q16d2-SA',
                                        'q16d3-SA',
                                        'q17a1-SA',
                                        'q17a2-SA',
                                        'q17a3-SA',
                                        'q17b-SA',
                                        'q17c-SA',
                                        'q17c1-SA',
                                        'q17c2-SA',
                                        'q17d-SA',
                                        'q17d1-SA',
                                        'q17e1-SA',
                                        'q17e1a-SA',
                                        'q17e2-SA',
                                        'q17e2a-SA',
                                        'q17e2b-SA',
                                        'q17e3-SA',
                                        'q17e3a-SA',
                                        'q17f-SA',
                                        'q17g-SA',
                                        'q18a-SA',
                                        'q18a1-SA',
                                        'q18a2-SA',
                                        'q18a3-SA',
                                        'q18a4-SA',
                                        'q18a5-SA',
                                        'q18b-SA',
                                        'q18b1-SA',
                                        'q18c-SA',
                                        'q18c1-SA',
                                        'q18d-SA',
                                        'q18d1-SA',
                                        'q18e-SA',
                                        'q18e1-SA',
                                        'q19a-SA',
                                        'q19a1-SA',
                                        'q19b-SA',
                                        'q19b1-SA',
                                        'q19c1-SA',
                                        'q19c2-SA',
                                        'q19d-SA',
                                        'q19d1-SA',
                                        'q19e-SA',
                                        'q19e1-SA',
                                        'q19f-SA',
                                        'q19f1-SA',
                                        'q19f2h-SA',
                                        'q19f2p-SA',
                                        'q20a-SA',
                                        'q20a1-SA',
                                        'q20a1a-SA',
                                        'q20a1b-SA',
                                        'q20a1c-SA',
                                        'q20b-SA',
                                        'q20b1-SA',
                                        'q20c-SA',
                                        'q21a-SA',
                                        'q21a1-SA',
                                        'q21b-SA',
                                        'q21b1-SA',
                                        'q21c1-SA',
                                        'q21c2-SA',
                                        'q21d1-SA',
                                        'q21d2-SA',
                                        'q21e-SA',
                                        'q21e1-SA');

                                    $tb4 = array('q22b1-SA',
                                        'q22b2-SA',
                                        'q22b3-SA',
                                        'q22c-SA',
                                        'q22d-SA',
                                        'q22e-SA',
                                        'q23a-SA',
                                        'q23a1-SA',
                                        'q23a2-SA',
                                        'q23b-SA',
                                        'q23c-SA',
                                        'q23c1-SA',
                                        'q23c2-SA',
                                        'q24a-SA',
                                        'q24b1-SA',
                                        'q24b2-SA',
                                        'q24b3-SA',
                                        'q24b4-SA',
                                        'q24b5-SA',
                                        'q24b6-SA',
                                        'q24b7-SA',
                                        'q24b7a-SA',
                                        'q25a-SA',
                                        'q25a1-SA',
                                        'q25b1-SA',
                                        'q25b2-SA',
                                        'q26a-SA',
                                        'q26a1-SA',
                                        'q26b-SA',
                                        'q26c-SA',
                                        'q26d-SA',
                                        'q26e-SA',
                                        'q26e1-SA');

                                    $tb5 = array('q27a-SA',
                                        'q27a1-SA',
                                        'q27b-SA',
                                        'q27b1-SA',
                                        'q27c-SA',
                                        'q27c1-SA',
                                        'q28a-SA',
                                        'q28b-SA',
                                        'q29-SA',
                                        'q30a-SA',
                                        'q30a1-SA',
                                        'q30b-SA',
                                        'q30b1-SA',
                                        'q30b2-SA',
                                        'q30c-SA',
                                        'q30c1-SA',
                                        'q31a-SA',
                                        'q31a1-SA',
                                        'q31b-SA',
                                        'q31b1-SA',
                                        'q31c-SA',
                                        'q31c1-SA',
                                        'q31d-SA',
                                        'q31e-SA',
                                        'q31f-SA',
                                        'q31g-SA',
                                        'q31h-SA',
                                        'q31i-SA',
                                        'q31j1-SA',
                                        'q31j2-SA',
                                        'q31j3-SA',
                                        'q31j4-SA',
                                        'q32a-SA',
                                        'q32a1-SA',
                                        'q32a2-SA',
                                        'q32a3-SA',
                                        'q32a4-SA',
                                        'q32a5a-SA',
                                        'q32a5b-SA',
                                        'q32a6-SA',
                                        'q32b-SA',
                                        'q32b1-SA',
                                        'q32c1-SA',
                                        'q32c1a-SA',
                                        'q32c2-SA',
                                        'q32c2a-SA',
                                        'q32c3-SA',
                                        'q32c3a-SA',
                                        'q32c4-SA',
                                        'q32c4a-SA',
                                        'q32d-SA',
                                        'q32d1-SA',
                                        'q32e-SA',
                                        'q32e1-SA',
                                        'q32e2-SA',
                                        'q32e3a-SA',
                                        'q32e3b-SA',
                                        'q33a-SA',
                                        'q33b-SA',
                                        'q34a-SA',
                                        'q34a1-SA',
                                        'q34a2-SA',
                                        'q34a3a-SA',
                                        'q34a3b-SA',
                                        'q34a4a-SA',
                                        'q34a4b-SA',
                                        'q34a5-SA',
                                        'q34a6-SA',
                                        'q34b-SA',
                                        'q34c-SA',
                                        'q34c1-SA',
                                        'q34d-SA',
                                        'q34e-SA',
                                        'q34f-SA');

                                    $tb6 = array('q35a1-SA',
                                        'q35a1a-SA',
                                        'q35a2-SA',
                                        'q35a2a-SA',
                                        'q35a3-SA',
                                        'q35a3a-SA',
                                        'q35b1-SA',
                                        'q35b2-SA',
                                        'q35c-SA',
                                        'q35c1-SA',
                                        'q36a-SA',
                                        'q36a1-SA',
                                        'q36b1-SA',
                                        'q36b2-SA',
                                        'q36b3-SA',
                                        'q36b4-SA',
                                        'q36b5-SA',
                                        'q36c1-SA',
                                        'q36c2-SA',
                                        'q36c3-SA',
                                        'q36c4-SA',
                                        'q36c5-SA',
                                        'q37a-SA',
                                        'q37b-SA',
                                        'q38a-SA',
                                        'q38b-SA',
                                        'q38c-SA',
                                        'q38d-SA',
                                        'q38e-SA',
                                        'q39a-SA',
                                        'q39b-SA',
                                        'q39b1-SA',
                                        'q39b2-SA',
                                        'q39b3-SA',
                                        'q39b4-SA',
                                        'q39b5-SA',
                                        'q39b6-SA',
                                        'q39b7-SA',
                                        'q39c-SA',
                                        'q39d-SA',
                                        'q39e-SA',
                                        'q40a-SA',
                                        'q40b-SA',
                                        'q40c-SA',
                                        'q40d-SA',
                                        'q40e-SA',
                                        'q41-SA',
                                        'q42a-SA',
                                        'q42b-SA',
                                        'q42b1-SA',
                                        'q43a-SA',
                                        'q43a1-SA',
                                        'q43b-SA',
                                        'q43b1-SA',
                                        'q44a-SA',
                                        'q44b-SA',
                                        'q45-SA',
                                        'q46a-SA',
                                        'q47a-SA',
                                        'q48a-SA',
                                        'q48b-SA',
                                        'q48b1-SA',
                                        'q48b2-SA',
                                        'q48b3-SA',
                                        'q48c-SA',
                                        'q48d-SA',
                                        'q49a-SA',
                                        'q49b-SA',
                                        'q49c-SA',
                                        'q49d-SA',
                                        'q49e-SA',
                                        'q49f-SA',
                                        'q49g-SA',
                                        'q49h-SA',
                                        'q49i-SA',
                                        'q50-SA',
                                        'q50a-SA',
                                        'q51a-SA',
                                        'q51a1-SA',
                                        'q51b-SA',
                                        'q52a-SA',
                                        'q52b-SA',
                                        'q52c-SA',
                                        'q52d-SA',
                                        'q52e-SA',
                                        'q52f-SA',
                                        'q53a-SA',
                                        'q53b-SA',
                                        'q53c-SA',
                                        'q54a-SA',
                                        'q54b-SA',
                                        'q54c-SA',
                                        'q55a-SA',
                                        'q55b-SA',
                                        'q55c-SA',
                                        'q56a-SA',
                                        'q56b-SA',
                                        'q57a1-SA',
                                        'q57a2-SA',
                                        'q57a3-SA',
                                        'q57b1-SA',
                                        'q57b2-SA',
                                        'q57b3-SA',
                                        'q57c1-SA',
                                        'q57c1a-SA',
                                        'q57c1b-SA',
                                        'q57c2-SA',
                                        'q57c2a-SA',
                                        'q57c2b-SA',
                                        'q57c2c-SA',
                                        'q57c3-SA',
                                        'q57c4-SA',
                                        'q58a-SA',
                                        'q58a1-SA',
                                        'q58b1-SA',
                                        'q58b2-SA',
                                        'q58b3-SA',
                                        'q59a-SA',
                                        'q59b-SA',
                                        'q59c1-SA',
                                        'q59c2-SA');

                                    $tb7 = array('q60a1-SA',
                                        'q60a1a-SA',
                                        'q60a2-SA',
                                        'q60a2a-SA',
                                        'q60a3-SA',
                                        'q60a3a-SA',
                                        'q60a4-SA',
                                        'q60a4a-SA',
                                        'q60b-SA',
                                        'q61a-SA',
                                        'q61a1a-SA',
                                        'q61a1b-SA',
                                        'q61a1c-SA',
                                        'q61b1-SA',
                                        'q61b1a-SA',
                                        'q61b2-SA',
                                        'q61b2a-SA',
                                        'q62a-SA',
                                        'q62b-SA',
                                        'q62c-SA',
                                        'q62d-SA',
                                        'q62e-SA',
                                        'q62f-SA',
                                        'q62g-SA',
                                        'q63a1-SA',
                                        'q63a2-SA',
                                        'q63a3-SA',
                                        'q63a4-SA',
                                        'q63b1-SA',
                                        'q63b2-SA',
                                        'q63b3-SA',
                                        'q63b4-SA',
                                        'q63c1-SA',
                                        'q63c2-SA',
                                        'q63c3-SA',
                                        'q63c4-SA',
                                        'q63c5-SA',
                                        'q63c6-SA',
                                        'q63d1-SA',
                                        'q63d2-SA',
                                        'q63e-SA',
                                        'q63f-SA',
                                        'q63g-SA',
                                        'q63h-SA',
                                        'q64a-SA',
                                        'q64a1-SA',
                                        'q64b-SA',
                                        'q64b1-SA',
                                        'q64c-SA',
                                        'q64c1-SA',
                                        'q65-SA',
                                        'q66a-SA',
                                        'q66b-SA',
                                        'q66c-SA',
                                        'q66d-SA',
                                        'q67a-SA',
                                        'q67b-SA',
                                        'q68a-SA',
                                        'q168b-SA',
                                        'q68c1-SA',
                                        'q68c2-SA',
                                        'q68c3-SA',
                                        'q69a-SA',
                                        'q69b1-SA',
                                        'q69b2-SA',
                                        'q69b3-SA',
                                        'q70a-SA',
                                        'q70b-SA',
                                        'q70c-SA',
                                        'q70d-SA',
                                        'q70e-SA',
                                        'q71a-SA',
                                        'q71a1-SA',
                                        'q71b-SA',
                                        'q71b1-SA',
                                        'q72-SA',
                                        'q73a-SA',
                                        'q73a1-SA',
                                        'q73b1-SA',
                                        'q73b-SA',
                                        'q73c-SA',
                                        'q73d1-SA',
                                        'q73d2-SA',
                                        'q74a-SA',
                                        'q74b-SA',
                                        'q75a-SA',
                                        'q75b-SA');
                                    
                                    if (in_array($row->name, $tb1))
                                    {
                                        foreach ($row->values as $key => $options){
                                            if(isset($options->selected)){
                                                array_push($tb1_array_qn,$row->name);
                                                array_push($tb1_array_ans,$options->value);
                                            }
                                        }
                                    }
                                    if (in_array($row->name, $tb2))
                                    {
                                        foreach ($row->values as $key => $options){
                                            if(isset($options->selected)){
                                                array_push($tb2_array_qn,$row->name);
                                                array_push($tb2_array_ans,$options->value);
                                            }
                                        }
                                    }
                                    if (in_array($row->name, $tb3))
                                    {
                                        foreach ($row->values as $key => $options){
                                            if(isset($options->selected)){
                                                array_push($tb3_array_qn,$row->name);
                                                array_push($tb3_array_ans,$options->value);
                                            }
                                        }
                                    }
                                    if (in_array($row->name, $tb4))
                                    {
                                        foreach ($row->values as $key => $options){
                                            if(isset($options->selected)){
                                                array_push($tb4_array_qn,$row->name);
                                                array_push($tb4_array_ans,$options->value);
                                            }
                                        }
                                    }
                                    if (in_array($row->name, $tb5))
                                    {
                                        foreach ($row->values as $key => $options){
                                            if(isset($options->selected)){
                                                array_push($tb5_array_qn,$row->name);
                                                array_push($tb5_array_ans,$options->value);
                                            }
                                        }
                                    }
                                    if (in_array($row->name, $tb6))
                                    {
                                        foreach ($row->values as $key => $options){
                                            if(isset($options->selected)){
                                                array_push($tb6_array_qn,$row->name);
                                                array_push($tb6_array_ans,$options->value);
                                            }
                                        }
                                    }
                                    if (in_array($row->name, $tb7))
                                    {
                                        foreach ($row->values as $key => $options){
                                            if(isset($options->selected)){
                                                array_push($tb7_array_qn,$row->name);
                                                array_push($tb7_array_ans,$options->value);
                                            }
                                        }
                                    }
                                ?> 
                        
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="card-body">
                    
                    <form action="<?php echo e(route('forms.fill.store', $form->id)); ?>" method="POST"
                        enctype="multipart/form-data" id="fill-form">
                        <input type="hidden" value="<?php echo e(Request::route('formvalue')); ?>" name="form_value_id" />
                        <?php echo method_field('PUT'); ?>
                        <?php if(session()->has('success')): ?>
                            <div class="text-center gallery" id="success_loader">
                                <img src="<?php echo e(asset('assets/images/success.gif')); ?>" />
                                <br>
                                <br>
                                <h2 class="w-100 "><?php echo e(session()->get('success')); ?></h2>
                            </div>
                        <?php else: ?>
                       
                        
                            <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                
                                <div class="tab">
                                    <?php if($keys==1): ?>
                                <div class="scbyaf">
                                    Score by Audit Firm: <span id="scbyaftotalt1"></span>
                                </div>
                                <?php endif; ?>
                                
                                <?php if($keys==2): ?>
                                <div class="scbyaf">
                                    Score by Audit Firm: <span id="scbyaftotalt2"></span>
                                </div>
                                <?php endif; ?>
                                
                                <?php if($keys==3): ?>
                                <div class="scbyaf">
                                    Score by Audit Firm: <span id="scbyaftotalt3"></span>
                                </div>
                                <?php endif; ?>
                                
                                <?php if($keys==4): ?>
                                <div class="scbyaf">
                                    Score by Audit Firm: <span id="scbyaftotalt4"></span>
                                </div>
                                <?php endif; ?>
                                
                                <?php if($keys==5): ?>
                                <div class="scbyaf">
                                    Score by Audit Firm: <span id="scbyaftotalt5"></span>
                                </div>
                                <?php endif; ?>
                                
                                <?php if($keys==6): ?>
                                <div class="scbyaf">
                                    Score by Audit Firm: <span id="scbyaftotalt6"></span>
                                </div>
                                <?php endif; ?>
                                
                                <?php if($keys==7): ?>
                                <div class="scbyaf">
                                    Score by Audit Firm: <span id="scbyaftotalt7"></span>
                                </div>
                                <?php endif; ?>
                                
                                    <div class="row">
                                        <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                if (isset($row->column)) {
                                                    if ($row->column == 1) {
                                                        $col = 'col-12 step-' . $keys;
                                                    } elseif ($row->column == 2) {
                                                        $col = 'col-6 step-' . $keys;
                                                    } elseif ($row->column == 3) {
                                                        $col = 'col-4 step-' . $keys;
                                                    }
                                                } else {
                                                    $col = 'col-12 step-' . $keys;
                                                }
                                            ?>
                                            <?php if($row->type == 'checkbox-group'): ?>
                                                <div class="form-group <?php echo e($col); ?> ">
                                                    <?php echo e(Form::label($row->name, $row->label . ($row->required ? ' *' : ''), ['class' => 'd-block'])); ?>

                                                    <?php if(isset($row->description)): ?>
                                                        <small class="d-block"><?php echo e($row->description); ?></small>
                                                    <?php endif; ?>
                                                    <?php $__currentLoopData = $row->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php
                                                            $attr = ['class' => 'custom-control-input', 'id' => $row->name . '_' . $key];
                                                            $attr['name'] = $row->name . '[]';
                                                            if ($row->required) {
                                                                $attr['required'] = 'required';
                                                                $attr['class'] = $attr['class'] . ' required';
                                                            }
                                                            if ($row->inline) {
                                                                $class = 'form-check form-check-inline col-4 ';
                                                                if ($row->required) {
                                                                    $attr['class'] = 'custom-check-input required';
                                                                } else {
                                                                    $attr['class'] = 'custom-check-input';
                                                                }
                                                                $l_class = 'custom-check-label mb-0 ml-1';
                                                            } else {
                                                                $class = 'custom-control custom-checkbox';
                                                                if ($row->required) {
                                                                    $attr['class'] = 'custom-control-input required';
                                                                } else {
                                                                    $attr['class'] = 'custom-control-input';
                                                                }
                                                                $l_class = 'custom-control-label';
                                                            }
                                                        ?>
                                                        <div class="<?php echo e($class); ?>">
                                                            <?php echo e(Form::checkbox($row->name,$options->value,isset($options->selected) && $options->selected == 1 ? true : false,$attr)); ?>

                                                            <label class="<?php echo e($l_class); ?>"
                                                                for="<?php echo e($row->name . '_' . $key); ?>"><?php echo e($options->label); ?></label>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($row->required): ?>
                                                        <label class="required-msg" style="color:red"></label>
                                                    <?php endif; ?>
                                                </div>
                                            <?php elseif($row->type == 'file'): ?>
                                                <?php
                                                    $attr = [];
                                                    $attr['class'] = 'form-control';
                                                    if (isset($row->multiple)) {
                                                        $attr['multiple'] = 'true';
                                                        $attr['name'] = $row->name . '[]';
                                                    }
                                                    if (isset($row->required) && (!isset($row->value) || empty($row->value))) {
                                                        $attr['required'] = 'required';
                                                        $attr['class'] = $attr['class'] . ' required';
                                                    }
                                                ?>
                                                <div class="form-group <?php echo e($col); ?>">
                                                    <?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?>
                                                        *
                                                    <?php endif; ?>
                                                    <?php echo e(Form::file($row->name, $attr)); ?>

                                                    <?php if(isset($row->description)): ?>
                                                        <small><?php echo e($row->description); ?></small>
                                                    <?php endif; ?>
                                                    <div>
                                                        <?php if(isset($row->value)): ?>
                                                            <?php if(is_array($row->value)): ?>
                                                                <div class="row">
                                                                    <?php $__currentLoopData = $row->value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <div class="col-3">
                                                                            <img src="<?php echo e(Storage::url($img)); ?>"
                                                                                class="img-responsive img-thumbnail mb-2">
                                                                        </div>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php elseif($row->type == 'header'): ?>
                                                <?php
                                                    $class = '';
                                                    if (isset($row->className)) {
                                                        $class = $class . ' ' . $row->className;
                                                    }
                                                ?>
                                                <div class="<?php echo e($col); ?>">
                                                    <<?php echo e($row->subtype); ?> class="<?php echo e($class); ?>">
                                                        <?php echo e($row->label); ?>

                                                        </<?php echo e($row->subtype); ?>>
                                                </div>
                                            <?php elseif($row->type == 'paragraph'): ?>
                                                <?php
                                                    $class = '';
                                                    if (isset($row->className)) {
                                                        $class = $class . ' ' . $row->className;
                                                    }
                                                ?>
                                                <div class="<?php echo e($col); ?>">
                                                    <<?php echo e($row->subtype); ?> class="<?php echo e($class); ?>">
                                                        <?php echo e($row->label); ?>

                                                        </<?php echo e($row->subtype); ?>>
                                                </div>
                                            <?php elseif($row->type == 'radio-group'): ?>
                                            <?php
                                            $disb = '';
                                            ?> 
                                                <div class="form-group <?php echo e($col); ?>">
                                                    <?php echo e(Form::label($row->name, $row->label . ($row->required ? ' *' : ''), ['class' => 'd-block'])); ?>

                                                    <?php if($row->label=="Score by QRB" && !$qrbedit): ?>
                                                     <?php
                                                        $disb =  'disabled';
                                                    ?>
                                                    <?php endif; ?>
                                                    <?php if(isset($row->description)): ?>
                                                        <small class="d-block"><?php echo e($row->description); ?></small>
                                                    <?php endif; ?>
                                                    <?php $__currentLoopData = $row->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php
                                                       
                                                            // $attr = ['class' => 'custom-control-input', 'id' => $row->name . '_' . $key];
                                                            if ($row->required) {
                                                                $attr['required'] = 'required';
                                                                $attr = ['class' => 'custom-control-input required', 'required' => 'required', 'id' => $row->name . '_' . $key, $disb];
                                                            } else {
                                                                $attr = ['class' => 'custom-control-input', 'id' => $row->name . '_' . $key, $disb];
                                                            }
                                                            if ($row->inline) {
                                                                $class = 'form-check form-check-inline ';
                                                                if ($row->required) {
                                                                    $attr['class'] = 'custom-check-input required';
                                                                } else {
                                                                    $attr['class'] = 'custom-check-input';
                                                                }
                                                                $l_class = 'custom-check-label mb-0 ml-1';
                                                            } else {
                                                                $class = 'custom-control custom-radio';
                                                                if ($row->required) {
                                                                    $attr['class'] = 'custom-control-input required';
                                                                } else {
                                                                    $attr['class'] = 'custom-control-input';
                                                                }
                                                                $l_class = 'custom-control-label';
                                                            }
                                                        ?>
                                                        <div class=" <?php echo e($class); ?>">
                                                            <?php echo e(Form::radio($row->name,$options->value,isset($options->selected) && $options->selected ? true : false,$attr)); ?>

                                                            <label class="<?php echo e($l_class); ?>"
                                                                for="<?php echo e($row->name . '_' . $key); ?>"><?php echo e($options->label); ?></label>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    <?php if($row->required): ?>
                                                        <label class="required-msg" style="color:red"></label>
                                                    <?php endif; ?>
                                                </div>
                                            <?php elseif($row->type == 'select' || $row->type == 'autocomplete'): ?>
                                                <div class="form-group <?php echo e($col); ?>">
                                                    <?php
                                                        $attr = ['class' => 'form-control custom_select w-100', 'id' => $row->name];
                                                        if ($row->required) {
                                                            $attr['required'] = 'required';
                                                            $attr['class'] = $attr['class'] . ' required';
                                                        }
                                                        if (isset($row->multiple) && !empty($row->multiple)) {
                                                            $attr['multiple'] = 'true';
                                                            $attr['name'] = $row->name . '[]';
                                                        }
                                                        if (isset($row->className) && $row->className == 'calculate') {
                                                            $attr['class'] = $attr['class'] . ' ' . $row->className;
                                                        }
                                                        if ($row->label == 'Registration') {
                                                            $attr['class'] = $attr['class'] . ' registration';
                                                        }
                                                        if (isset($row->is_parent) && $row->is_parent == 'true') {
                                                            $attr['class'] = $attr['class'] . ' parent';
                                                            $attr['data-number-of-control'] = isset($row->number_of_control) ? $row->number_of_control : 1;
                                                        }
                                                        $values = [];
                                                        $selected = [];
                                                        foreach ($row->values as $options) {
                                                            $values[$options->value] = $options->label;
                                                            if (isset($options->selected)) {
                                                                $selected[] = $options->value;
                                                            }
                                                        }
                                                    ?>
                                                    <?php if(isset($row->is_parent) && $row->is_parent == 'true'): ?>
                                                        <?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?>
                                                            *
                                                        <?php endif; ?>
                                                        <div class="input-group">
                                                            <?php echo e(Form::select($row->name, $values, $selected, $attr)); ?>

                                                            <div class="input-group-append">
                                                                <button type="button"
                                                                    class="btn btn-outline-primary open-photo"><?php echo e(__('Add Photo')); ?></button>
                                                            </div>
                                                        </div>
                                                    <?php else: ?>
                                                        <?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?>
                                                            *
                                                        <?php endif; ?>
                                                        <?php echo e(Form::select($row->name, $values, $selected, $attr)); ?>

                                                    <?php endif; ?>
                                                    <?php if($row->label == 'Registration'): ?>
                                                        <span class="text-warning registration-message"></span>
                                                    <?php endif; ?>
                                                </div>
                                            <?php elseif($row->type == 'date'): ?>
                                                <div class="form-group <?php echo e($col); ?>">
                                                    <?php
                                                        $attr = ['class' => 'form-control'];
                                                        if ($row->required) {
                                                            $attr['required'] = 'required';
                                                             $attr['max'] = date('Y-m-d'); 
                                                            $attr['class'] = $attr['class'] . ' required';
                                                        }
                                                    ?>
                                                    <?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?>
                                                        *
                                                    <?php endif; ?>
                                                    <?php echo e(Form::date($row->name, isset($row->value) ? $row->value : null, $attr)); ?>

                                                    <?php if(isset($row->description)): ?>
                                                        <small><?php echo e($row->description); ?></small>
                                                    <?php endif; ?>
                                                </div>
                                            <?php elseif($row->type == 'hidden'): ?>
                                                <div class="form-group <?php echo e($col); ?>">
                                                    <?php echo e(Form::hidden($row->name, isset($row->value) ? $row->value : null)); ?>

                                                </div>
                                            <?php elseif($row->type == 'number'): ?>
                                                <div class="form-group <?php echo e($col); ?>">
                                                    <?php
                                                        $attr = ['class' => 'form-control'];
                                                        if ($row->required) {
                                                            $attr['required'] = 'required';
                                                            $attr['class'] = $attr['class'] . ' required';
                                                        }
                                                    ?>
                                                    <?php echo e(Form::label($row->name, $row->label)); ?>

                                                    <?php if($row->required): ?>
                                                        *
                                                    <?php endif; ?>
                                                     <?php if(isset($row->description)): ?>
                                                        <small class="d-block"><?php echo e($row->description); ?></small>
                                                    <?php endif; ?>
                                                    <?php echo e(Form::number($row->name, isset($row->value) ? $row->value : null, $attr)); ?>

                                                </div>
                                            <?php elseif($row->type == 'textarea'): ?>
                                                <div class="form-group <?php echo e($col); ?>">
                                                    <?php
                                                        $attr = ['class' => 'form-control text-area-height'];
                                                        if ($row->required) {
                                                            $attr['required'] = 'required';
                                                            $attr['class'] = $attr['class'] . ' required';
                                                        }
                                                        if (isset($row->rows)) {
                                                            $attr['rows'] = $row->rows;
                                                        } else {
                                                            $attr['rows'] = '3';
                                                        }

                                                        if ($row->subtype == 'ckeditor') {
                                                            $attr['class'] = $attr['class'] . ' ck_editor';
                                                        }
                                                    ?>
                                                    <?php echo e(Form::label($row->name, $row->label)); ?>

                                                    <?php echo e(Form::textarea($row->name, isset($row->value) ? $row->value : null, $attr)); ?>

                                                </div>
                                            <?php elseif($row->type == 'button'): ?>
                                                <div class="form-group <?php echo e($col); ?>">
                                                    <?php echo e(Form::button(__($row->label), ['name' => $row->name,'type' => $row->subtype,'class' => $row->className,'id' => $row->name])); ?>

                                                </div>
                                            <?php elseif($row->type == 'text'): ?>
                                                <div class="form-group <?php echo e($col); ?>">
                                                    <?php
                                                        $attr = ['class' => 'form-control'];
                                                        if ($row->required) {
                                                            $attr['required'] = 'required';
                                                            $attr['class'] = $attr['class'] . ' required';
                                                        }
                                                        if (isset($row->maxlength)) {
                                                            $attr['max'] = $row->maxlength;
                                                        }
                                                        if (isset($row->placeholder)) {
                                                            $attr['placeholder'] = $row->placeholder;
                                                        }
                                                        $value = isset($row->value) ? $row->value : '';
                                                        if ($row->subtype == 'datetime-local') {
                                                            $row->subtype = 'text';
                                                            $attr['class'] = $attr['class'] . ' date_time';
                                                        }
                                                    ?>
                                                    <?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?>
                                                        *
                                                    <?php endif; ?>
                                                    <?php echo e(Form::input($row->subtype, $row->name, $value, $attr)); ?>

                                                    <?php if(isset($row->description)): ?>
                                                        <small><?php echo e($row->description); ?></small>
                                                    <?php endif; ?>
                                                </div>
                                            <?php elseif($row->type == 'starRating'): ?>
                                                <div class="form-group <?php echo e($col); ?>">
                                                    <?php
                                                        $value = isset($row->value) ? $row->value : 0;
                                                        $num_of_star = isset($row->number_of_star) ? $row->number_of_star : 5;
                                                    ?>
                                                    <?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?>
                                                        *
                                                    <?php endif; ?>
                                                    <div id="<?php echo e($row->name); ?>" class="starRating"
                                                        data-value="<?php echo e($value); ?>"
                                                        data-num_of_star="<?php echo e($num_of_star); ?>">
                                                    </div>
                                                    <input type="hidden" name="<?php echo e($row->name); ?>"
                                                        value="<?php echo e($value); ?>" class="calculate"
                                                        data-star="<?php echo e($num_of_star); ?>">
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if(!isset($form_value) && $form->payment_status == 1): ?>
                                <?php if(!isset($form_value) && $form->payment_type == 'stripe'): ?>
                                    <div class="strip">
                                        <strong class="d-block"><?php echo e(__('Payment')); ?>

                                            (<?php echo e($form->currency_symbol); ?><?php echo e($form->amount); ?>)</strong>
                                        <div id="card-element" class="form-control">
                                            <!-- a Stripe Element will be inserted here. -->
                                        </div>
                                        <span id="card-errors" class="payment-errors"
                                            style="color: red; font-size: 22px; "></span>
                                        <br>
                                    </div>
                                <?php elseif(!isset($form_value) && $form->payment_type == 'razorpay'): ?>
                                    <div class="razorpay">
                                        <p><?php echo e(__('Make Payment')); ?></p>
                                        <input type="hidden" name="payment_id" id="payment_id">
                                        <h5><?php echo e(__('Payble Amount')); ?> : <?php echo e($form->currency_symbol); ?>

                                            <?php echo e($form->amount); ?></h5>
                                    </div>
                                <?php elseif(!isset($form_value) && $form->payment_type == 'paypal'): ?>
                                    <div class="paypal">
                                        <p><?php echo e(__('Make Payment')); ?></p>
                                        <input type="hidden" name="payment_id" id="payment_id">
                                        <h5><?php echo e(__('Payble Amount')); ?> : <?php echo e($form->currency_symbol); ?>

                                            <?php echo e($form->amount); ?></h5>
                                        <div id="paypal-button-container"></div>
                                        <span id="paypal-errors" class="payment-errors"
                                            style="color: red; font-size: 22px; "></span>
                                        <br>

                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col cap">
                                    <?php if(env('CAPTCHASETTING')): ?>
                                        <?php if(setting('captcha') == 'hcaptcha'): ?>
                                            <?php echo HCaptcha::renderJs(); ?>

                                            <?php echo HCaptcha::display(); ?>

                                        <?php endif; ?>
                                        <?php if(setting('captcha') == 'recaptcha'): ?>
                                            <?php echo NoCaptcha::renderJs(); ?>

                                            <?php echo NoCaptcha::display(); ?>

                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <div class="form-actions pb-0 mt-3">
                                       <!-- <input type="hidden" name="form_value_id"
                                            value="<?php echo e(isset($form_value) ? $form_value->id : ''); ?>"
                                            id="form_value_id">-->
                                    </div>
                                </div>
                            </div>
                            <div style="overflow:auto;">
                                <div style="float:left;">
                                    <button type="button" class="btn btn-warning" id="nextBtns" onclick="saveandClose(1)">
                                        <?php echo e(__('Save and Next')); ?>

                                    </button>

                                    <button type="button" class="btn btn-warning ml-2" id="saveAsDraft" onclick="saveAsDraftXtra(1)">
                                        <?php echo e(__('Save as Draft')); ?>

                                    </button>
                                </div>
                                <div style="float:right;">
                                    <button type="button" class="btn btn-default" id="prevBtn"
                                        onclick="nextPrev(-1)"><?php echo e(__('Previous')); ?></button>
                                    <button type="button" class="btn btn-primary" id="nextBtn"
                                        onclick="nextPrev(1)"><?php echo e(__('Next')); ?></button>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="step"></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div style="text-align:center;font-size:17px">
                                
                                <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="stepa"><?php echo e($keys+1); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                        <?php echo e(Form::close()); ?>

                </div>
         
            </div>
        </div>
    </div>
</div>


<script>
   // document.getElementById(setc).setAttribute("disabled","disabled");
   
   
 function myfunctionop(event) {
  if(event.target.name=='q21b'){
            disbtnop(event.target.value, 'q21b1');
             disbtnop(event.target.value, 'RefNumber-q21b1');
            disbtnop(event.target.value, 'q21b1-SA');
            disbtnop(event.target.value, 'q21b1-SQ');
        }
 }

 function loadDisable(elem, radVal) {
    // console.log("loadDisable")
    if(elem=='q2c'){
        disbtn(radVal, 'q2c1');
        disbtn(radVal, 'RefNumber-q2c1');
        disbtn(radVal, 'q2c1-SA');
        disbtn(radVal, 'q2c1-SQ');
    }
    if(elem=='q2d'){ //q2d
        disbtn(radVal, 'q2d1');
        disbtn(radVal, 'q2d1p');
        disbtn(radVal, 'q2d1desc')
        disbtn(radVal, 'RefNumber-q2d1');
        disbtn(radVal, 'q2d1-SA');
        
        disbtn(radVal, 'q2d1-SQ');
    }
    
    if(elem=='q3a3'){
        disbtn(radVal, 'q3b');
        disbtn(radVal, 'RefNumber-q3b');
        disbtn(radVal, 'q3b-SA');
        disbtn(radVal, 'q3b-SQ');
    }
    if(elem=='q4a2'){
        disbtn(radVal, 'q4b');
        disbtn(radVal, 'RefNumber-q4b');
        disbtn(radVal, 'q4b-SA');
        disbtn(radVal, 'q4b-SQ');

    }
    if(elem=='q6a'){
        disbtn(radVal, 'q6b');
        disbtn(radVal, 'RefNumber-q6b');
        disbtn(radVal, 'q6b-SA');
        disbtn(radVal, 'q6b-SQ');
    }
    if(elem=='q7a'){
        disbtn(radVal, 'q7b');
        disbtn(radVal, 'RefNumber-q7b');
        disbtn(radVal, 'q7b-SA');
        disbtn(radVal, 'q7b-SQ');
    }
    if(elem=='q7d'){
        disbtn(radVal, 'q7e');
        disbtn(radVal, 'RefNumber-q7e');
        disbtn(radVal, 'q7e-SA');
        disbtn(radVal, 'q7e-SQ');
    }
    if(elem=='q8a'){
        disbtn(radVal, 'q8a1');
        disbtn(radVal, 'RefNumber-q8a1');
        // document.getElementById("q8a1-SA").disabled = true;  
        disbtn(radVal, 'q8a1-SA');
        disbtn(radVal, 'q8a1-SQ');
    }
    if(elem=='q9a'){
        disbtn(radVal, 'q9a1');
        disbtn(radVal, 'RefNumber-q9a1');
        disbtn(radVal, 'q9a1-SA');
        disbtn(radVal, 'q9a1-SQ');
    }
    if(elem=='q10a'){
        disbtn(radVal, 'q10a1');
        disbtn(radVal, 'RefNumber-q10a1');
        disbtn(radVal, 'q10a1-SA');
        disbtn(radVal, 'q10a1-SQ');
    }
    if(elem=='q10b'){
        disbtn(radVal, 'q10c');
        disbtn(radVal, 'RefNumber-q10c');
        disbtn(radVal, 'q10c-SA');
        disbtn(radVal, 'q10c-SQ');
    }
    if(elem=='q10d'){
        disbtn(radVal, 'q10e');
        disbtn(radVal, 'RefNumber-q10e');
        disbtn(radVal, 'q10e-SA');
        disbtn(radVal, 'q10e-SQ');
    }
    if(elem=='q11a'){
        disbtn(radVal, 'q11a1');
        disbtn(radVal, 'RefNumber-q11a1');
        disbtn(radVal, 'q11a1-SA');
        disbtn(radVal, 'q11a1-SQ');
    }
    if(elem=='q11b'){
        disbtn(radVal, 'q11b1');
        disbtn(radVal, 'RefNumber-q11b1');
        disbtn(radVal, 'q11b1-SA');
        disbtn(radVal, 'q11b1-SQ');
    }
    if(elem=='q11d'){
        disbtn(radVal, 'q11d1');
        disbtn(radVal, 'RefNumber-q11d1');
        disbtn(radVal, 'q11d1-SA');
        disbtn(radVal, 'q11d1-SQ');
    }
    if(elem=='q12a'){
        disbtn(radVal, 'q12b');
        disbtn(radVal, 'RefNumber-q12b');
        disbtn(radVal, 'q12b-SA');nextBtns
        disbtn(radVal, 'q12b-SQ');
    }
    if(elem=='q12c1'){
        disbtn(radVal, 'q12c1a');
        disbtn(radVal, 'RefNumber-q12c1a');
        disbtn(radVal, 'q12c1a-SA');
        disbtn(radVal, 'q12c1a-SQ');
    }
    if(elem=='q12c2'){
        disbtn(radVal, 'q12c2a');
        disbtn(radVal, 'RefNumber-q12c2a');
        disbtn(radVal, 'q12c2a-SA');
        disbtn(radVal, 'q12c2a-SQ');
    }
    if(elem=='q12c3'){
        disbtn(radVal, 'q12c3a');
        disbtn(radVal, 'RefNumber-q12c3a');
        disbtn(radVal, 'q12c3a-SA');
        disbtn(radVal, 'q12c3a-SQ');
    }
    if(elem=='q13a'){
        disbtn(radVal, 'q13b');
            disbtn(radVal, 'RefNumber-q13b');
        disbtn(radVal, 'q13b-SA');
        disbtn(radVal, 'q13b-SQ');
    }
    if(elem=='q14'){
        disbtn(radVal, 'q14a');
            disbtn(radVal, 'RefNumber-q14a');
        disbtn(radVal, 'q14a-SA');
        disbtn(radVal, 'q14a-SQ');
    }
    if(elem=='q15a'){
        disbtn(radVal, 'q15a1');
            disbtn(radVal, 'RefNumber-q3b');
        disbtn(radVal, 'q3b-SA');
        disbtn(radVal, 'q15a1-SQ');
    }
    if(elem=='q15b1'){
        disbtn(radVal, 'q15b1a');
            disbtn(radVal, 'RefNumber-q15b1a');
        disbtn(radVal, 'q15b1a-SA');
        disbtn(radVal, 'q15b1a-SQ');
    }
    if(elem=='q15b2'){
        disbtn(radVal, 'q15b2a');
            disbtn(radVal, 'RefNumber-q15b2a');
        disbtn(radVal, 'q15b2a-SA');
        disbtn(radVal, 'q15b2a-SQ');
    }
    if(elem=='q15b3'){
        disbtn(radVal, 'q15b3a');
            disbtn(radVal, 'RefNumber-q15b3a');
        disbtn(radVal, 'q15b3a-SA');
        disbtn(radVal, 'q15b3a-SQ');
    }
    if(elem=='q16a'){
        disbtn(radVal, 'q16a1');
            disbtn(radVal, 'RefNumber-q16a1');
        disbtn(radVal, 'q16a1-SA');
        disbtn(radVal, 'q16a1-SQ');
    }
    if(elem=='q16b'){
        disbtn(radVal, 'q16b1');
            disbtn(radVal, 'RefNumber-q16b1');
        disbtn(radVal, 'q16b1-SA');
        disbtn(radVal, 'q16b1-SQ');
    }
    if(elem=='q16c'){
        disbtn(radVal, 'q16c1');
            disbtn(radVal, 'RefNumber-q16c1');
        disbtn(radVal, 'q16c1-SA');
        disbtn(radVal, 'q16c1-SQ');
    }
    if(elem=='q16d'){
        disbtn(radVal, 'q16d1');
            disbtn(radVal, 'RefNumber-q16d1');
        disbtn(radVal, 'q16d1-SA');
        disbtn(radVal, 'q16d1-SQ');
    }
    if(elem=='q17c'){
        disbtn(radVal, 'q17c1');
            disbtn(radVal, 'RefNumber-q17c1');
        disbtn(radVal, 'q17c1-SA');
        disbtn(radVal, 'q17c1-SQ');
    }
    if(elem=='q17d'){
        disbtn(radVal, 'q17d1');
            disbtn(radVal, 'RefNumber-q17d1');
        disbtn(radVal, 'q17d1-SA');
        disbtn(radVal, 'q17d1-SQ');
    }
    if(elem=='q17e1'){
        disbtn(radVal, 'q17e1a');
            disbtn(radVal, 'RefNumber-q17e1a');
        disbtn(radVal, 'q17e1a-SA');
        disbtn(radVal, 'q17e1a-SQ');
    }
    if(elem=='q17e2'){
        disbtn(radVal, 'q17e2a');
            disbtn(radVal, 'RefNumber-q17e2a');
        disbtn(radVal, 'q17e2a-SA');
        disbtn(radVal, 'q17e2a-SQ');
    }
    if(elem=='q17e3'){
        disbtn(radVal, 'q17e3a');
            disbtn(radVal, 'RefNumber-q17e3a');
        disbtn(radVal, 'q17e3a-SA');
        disbtn(radVal, 'q17e3a-SQ');
    }
    if(elem=='q17f'){
        disbtn(radVal, 'q17g');
            disbtn(radVal, 'RefNumber-q17g');
        disbtn(radVal, 'q17g-SA');
        disbtn(radVal, 'q17g-SQ');
    }
    if(elem=='q18a'){
        disbtn(radVal, 'q18a1');
            disbtn(radVal, 'RefNumber-q18a1');
        disbtn(radVal, 'q18a1-SA');
        disbtn(radVal, 'q18a1-SQ');
    }
    if(elem=='q18b'){
        disbtn(radVal, 'q18b1');
            disbtn(radVal, 'RefNumber-q18b1');
        disbtn(radVal, 'q18b1-SA');
        disbtn(radVal, 'q18b1-SQ');
    }
    if(elem=='q18c'){
        disbtn(radVal, 'q18c1');
            disbtn(radVal, 'RefNumber-q18c1');
        disbtn(radVal, 'q18c1-SA');
        disbtn(radVal, 'q18c1-SQ');
    }
    if(elem=='q18d'){
        disbtn(radVal, 'q18d1');
            disbtn(radVal, 'RefNumber-q18d1');
        disbtn(radVal, 'q18d1-SA');
        disbtn(radVal, 'q18d1-SQ');
    }
    if(elem=='q18e'){
        disbtn(radVal, 'q18e1');
            disbtn(radVal, 'RefNumber-q18e1');
        disbtn(radVal, 'q18e1-SA');
        disbtn(radVal, 'q18e1-SQ');
    }
    if(elem=='q19a'){
        disbtn(radVal, 'q19a1');
            disbtn(radVal, 'RefNumber-q19a1');
        disbtn(radVal, 'q19a1-SA');
        disbtn(radVal, 'q19a1-SQ');
    }
    if(elem=='q19d'){
        disbtn(radVal, 'q19d1');
            disbtn(radVal, 'RefNumber-q19d1');
        disbtn(radVal, 'q19d1-SA');
        disbtn(radVal, 'q19d1-SQ');
    }
    if(elem=='q19e'){
        disbtn(radVal, 'q19e1');
            disbtn(radVal, 'RefNumber-q19e1');
        disbtn(radVal, 'q19e1-SA');
        disbtn(radVal, 'q19e1-SQ');
    }
    if(elem=='q19f'){
        disbtn(radVal, 'q19f1');
            disbtn(radVal, 'RefNumber-q19f1');
        disbtn(radVal, 'q19f1-SA');
        disbtn(radVal, 'q19f1-SQ');
    }
    if(elem=='q20a'){
        disbtn(radVal, 'q20a1');
            disbtn(radVal, 'RefNumber-q20a1');
        disbtn(radVal, 'q20a1-SA');
        disbtn(radVal, 'q20a1-SQ');
    }
    if(elem=='q20b'){
        disbtn(radVal, 'q20b1');
            disbtn(radVal, 'RefNumber-q20b1');
        disbtn(radVal, 'q20b1-SA');
        disbtn(radVal, 'q20b1-SQ');
    }
    if(elem=='q21a'){
        disbtn(radVal, 'q21a1');
            disbtn(radVal, 'RefNumber-q21a1');
        disbtn(radVal, 'q21a1-SA');
        disbtn(radVal, 'q21a1-SQ');
    }
    
    if(elem=='q22d'){
        disbtn(radVal, 'q22e');
            disbtn(radVal, 'RefNumber-q22e');
        disbtn(radVal, 'q22e-SA');
        disbtn(radVal, 'q22e-SQ');
    }
    if(elem=='q25a'){
        disbtn(radVal, 'q25a1');
            disbtn(radVal, 'RefNumber-q25a1');
        disbtn(radVal, 'q25a1-SA');
        disbtn(radVal, 'q25a1-SQ');
    }
    if(elem=='q26a'){
        disbtn(radVal, 'q26a1');
            disbtn(radVal, 'RefNumber-q26a1');
        disbtn(radVal, 'q26a1-SA');
        disbtn(radVal, 'q26a1-SQ');
    }
    if(elem=='q26e'){
        disbtn(radVal, 'q26e1');
            disbtn(radVal, 'RefNumber-q26e1');
        disbtn(radVal, 'q26e1-SA');
        disbtn(radVal, 'q26e1-SQ');
    }
    if(elem=='q27a'){
        disbtn(radVal, 'q27a1');
            disbtn(radVal, 'RefNumber-q27a1');
        disbtn(radVal, 'q27a1-SA');
        disbtn(radVal, 'q27a1-SQ');
    }
    if(elem=='q27b'){
        disbtn(radVal, 'q27b1');
            disbtn(radVal, 'RefNumber-q27b1');
        disbtn(radVal, 'q27b1-SA');
        disbtn(radVal, 'q27b1-SQ');
    }
    if(elem=='q27c'){
        disbtn(radVal, 'q27c1');
            disbtn(radVal, 'RefNumber-q27c1');
        disbtn(radVal, 'q27c1-SA');
        disbtn(radVal, 'q27c1-SQ');
    }
    if(elem=='q28a'){
        disbtn(radVal, 'q28b');
            disbtn(radVal, 'RefNumber-q28b');
        disbtn(radVal, 'q28b-SA');
        disbtn(radVal, 'q28b-SQ');
    }
    if(elem=='q30b'){
        disbtn(radVal, 'q30b1');
            disbtn(radVal, 'RefNumber-q30b1');
        disbtn(radVal, 'q30b1-SA');
        disbtn(radVal, 'q30b1-SQ');
    }
    if(elem=='q30c'){
        disbtn(radVal, 'q30c1');
            disbtn(radVal, 'RefNumber-q30c1');
        disbtn(radVal, 'q30c1-SA');
        disbtn(radVal, 'q30c1-SQ');
    }
    if(elem=='q31a'){
        disbtn(radVal, 'q31a1');
            disbtn(radVal, 'RefNumber-q31a1');
        disbtn(radVal, 'q31a1-SA');
        disbtn(radVal, 'q31a1-SQ');
    }
    if(elem=='q31b'){
        disbtn(radVal, 'q31b1');
            disbtn(radVal, 'RefNumber-q31b1');
        disbtn(radVal, 'q31b1-SA');
        disbtn(radVal, 'q31b1-SQ');
    }
    if(elem=='q31c'){
        disbtn(radVal, 'q31c1');
            disbtn(radVal, 'RefNumber-q31c1');
        disbtn(radVal, 'q31c1-SA');
        disbtn(radVal, 'q31c1-SQ');
    }
    if(elem=='q32a'){
        disbtn(radVal, 'q32a1');
            disbtn(radVal, 'RefNumber-q32a1');
        disbtn(radVal, 'q32a1-SA');
        disbtn(radVal, 'q32a1-SQ');
    }
    if(elem=='q32b'){
        disbtn(radVal, 'q32b1');
            disbtn(radVal, 'RefNumber-q32b1');
        disbtn(radVal, 'q32b1-SA');
        disbtn(radVal, 'q32b1-SQ');
    }
    if(elem=='q32c1'){
        disbtn(radVal, 'q32c1a');
            disbtn(radVal, 'RefNumber-q32c1a');
        disbtn(radVal, 'q32c1a-SA');
        disbtn(radVal, 'q32c1a-SQ');
    }
    if(elem=='q32c2'){
        disbtn(radVal, 'q32c2a');
            disbtn(radVal, 'RefNumber-q32c2a');
        disbtn(radVal, 'q32c2a-SA');
        disbtn(radVal, 'q32c2a-SQ');
    }
    if(elem=='q32c3'){
        disbtn(radVal, 'q32c3a');
            disbtn(radVal, 'RefNumber-q32c3a');
        disbtn(radVal, 'q32c3a-SA');
        disbtn(radVal, 'q32c3a-SQ');
    }
    if(elem=='q32c4'){
        disbtn(radVal, 'q32c4a');
            disbtn(radVal, 'RefNumber-q32c4a');
        disbtn(radVal, 'q32c4a-SA');
        disbtn(radVal, 'q32c4a-SQ');
    }
    if(elem=='q32d'){
        disbtn(radVal, 'q32d1');
            disbtn(radVal, 'RefNumber-q32d1');
        disbtn(radVal, 'q32d1-SA');
        disbtn(radVal, 'q32d1-SQ');
    }
    if(elem=='q32e'){
        disbtn(radVal, 'q32e1');
            disbtn(radVal, 'RefNumber-q32e1');
        disbtn(radVal, 'q32e1-SA');
        disbtn(radVal, 'q32e1-SQ');
    }
    if(elem=='q33a'){
        disbtn(radVal, 'q33b');
            disbtn(radVal, 'RefNumber-q33b');
        disbtn(radVal, 'q33b-SA');
        disbtn(radVal, 'q33b-SQ');
    }
    if(elem=='q34a'){
        disbtn(radVal, 'q34a1');
            disbtn(radVal, 'RefNumber-q34a1');
        disbtn(radVal, 'q34a1-SA');
        disbtn(radVal, 'q34a1-SQ');
    }
    if(elem=='q34c'){
        disbtn(radVal, 'q34c1');
            disbtn(radVal, 'RefNumber-q34c1');
        disbtn(radVal, 'q34c1-SA');
        disbtn(radVal, 'q34c1-SQ');
    }
    if(elem=='q35a1'){
        disbtn(radVal, 'q35a1a');
            disbtn(radVal, 'RefNumber-q35a1a');
        disbtn(radVal, 'q35a1a-SA');
        disbtn(radVal, 'q35a1a-SQ');
    }
    if(elem=='q35a2'){
        disbtn(radVal, 'q35a2a');
            disbtn(radVal, 'RefNumber-q35a2a');
        disbtn(radVal, 'q35a2a-SA');
        disbtn(radVal, 'q35a2a-SQ');
    }
    if(elem=='q35a3'){
        disbtn(radVal, 'q35a3a');
            disbtn(radVal, 'RefNumber-q35a3a');
        disbtn(radVal, 'q35a3a-SA');
        disbtn(radVal, 'q35a3a-SQ');
    }
    if(elem=='q35c'){
        disbtn(radVal, 'q35c1');
            disbtn(radVal, 'RefNumber-q35c1');
        disbtn(radVal, 'q35c1-SA');
        disbtn(radVal, 'q35c1-SQ');
    }
    if(elem=='q36a'){
        disbtn(radVal, 'q36a1');
            disbtn(radVal, 'RefNumber-q36a1');
        disbtn(radVal, 'q36a1-SA');
        disbtn(radVal, 'q36a1-SQ');
    }
    if(elem=='q37a'){
        disbtn(radVal, 'q37b');
            disbtn(radVal, 'RefNumber-q37b');
        disbtn(radVal, 'q37b-SA');
        disbtn(radVal, 'q37b-SQ');
    }
    if(elem=='q39d'){
        disbtn(radVal, 'q39e');
            disbtn(radVal, 'RefNumber-q39e');
        disbtn(radVal, 'q39e-SA');
        disbtn(radVal, 'q39e-SQ');
    }
    if(elem=='q42b'){
        disbtn(radVal, 'q42b1');
            disbtn(radVal, 'RefNumber-q42b1');
        disbtn(radVal, 'q42b1-SA');
        disbtn(radVal, 'q42b1-SQ');
    }
    if(elem=='q43a'){
        disbtn(radVal, 'q43a1');
            disbtn(radVal, 'RefNumber-q43a1');
        disbtn(radVal, 'q43a1-SA');
        disbtn(radVal, 'q43a1-SQ');
    }
    if(elem=='q43b'){
        disbtn(radVal, 'q43b1');
            disbtn(radVal, 'RefNumber-q43b1');
        disbtn(radVal, 'q43b1-SA');
        disbtn(radVal, 'q43b1-SQ');
    }
    if(elem=='q44a'){
        disbtn(radVal, 'q44b');
            disbtn(radVal, 'RefNumber-q44b');
        disbtn(radVal, 'q44b-SA');
        disbtn(radVal, 'q44b-SQ');
    }
    if(elem=='q50'){
        disbtn(radVal, 'q50a');
            disbtn(radVal, 'RefNumber-q50a');
        disbtn(radVal, 'q50a-SA');
        disbtn(radVal, 'q50a-SQ');
    }
    if(elem=='q56a'){
        disbtn(radVal, 'q56b');
            disbtn(radVal, 'RefNumber-q56b');
        disbtn(radVal, 'q56b-SA');
        disbtn(radVal, 'q56b-SQ');
    }
    if(elem=='q57c1'){
        disbtn(radVal, 'q57c1a');
            disbtn(radVal, 'RefNumber-q57c1a');
        disbtn(radVal, 'q57c1a-SA');
        disbtn(radVal, 'q57c1a-SQ');
    }
    if(elem=='q58a'){
        disbtn(radVal, 'q58a1');
            disbtn(radVal, 'RefNumber-q58a1');
        disbtn(radVal, 'q58a1-SA');
        disbtn(radVal, 'q58a1-SQ');
    }
    if(elem=='q59a'){
        disbtn(radVal, 'q59b');
            disbtn(radVal, 'RefNumber-q59b');
        disbtn(radVal, 'q59b-SA');
        disbtn(radVal, 'q59b-SQ');
    }
    if(elem=='q60a1'){
        disbtn(radVal, 'q60a1a');
            disbtn(radVal, 'RefNumber-q60a1a');
        disbtn(radVal, 'q60a1a-SA');
        disbtn(radVal, 'q60a1a-SQ');
    }
    if(elem=='q60a2'){
        disbtn(radVal, 'q60a2a');
            disbtn(radVal, 'RefNumber-q60a2a');
        disbtn(radVal, 'q60a2a-SA');
        disbtn(radVal, 'q60a2a-SQ');
    }
    if(elem=='q60a3'){
        disbtn(radVal, 'q60a3a');
            disbtn(radVal, 'RefNumber-q60a3a');
        disbtn(radVal, 'q60a3a-SA');
        disbtn(radVal, 'q60a3a-SQ');
    }
    if(elem=='q60a4'){
        disbtn(radVal, 'q60a4a');
            disbtn(radVal, 'RefNumber-q60a4a');
        disbtn(radVal, 'q60a4a-SA');
        disbtn(radVal, 'q60a4a-SQ');
    }
    if(elem=='q61b1'){
        disbtn(radVal, 'q61b1a');
            disbtn(radVal, 'RefNumber-q61b1a');
        disbtn(radVal, 'q61b1a-SA');
        disbtn(radVal, 'q61b1a-SQ');
    }
    if(elem=='q61b2'){
        disbtn(radVal, 'q61b2a');
            disbtn(radVal, 'RefNumber-q61b2a');
        disbtn(radVal, 'q61b2a-SA');
        disbtn(radVal, 'q61b2a-SQ');
    }
    if(elem=='q64a'){
        disbtn(radVal, 'q64a1');
            disbtn(radVal, 'RefNumber-q64a1');
        disbtn(radVal, 'q64a1-SA');
        disbtn(radVal, 'q64a1-SQ');
    }
    if(elem=='q64b'){
        disbtn(radVal, 'q64b1');
            disbtn(radVal, 'RefNumber-q64b1');
        disbtn(radVal, 'q64b1-SA');
        disbtn(radVal, 'q64b1-SQ');
    }
    if(elem=='q64c'){
        disbtn(radVal, 'q64c1');
            disbtn(radVal, 'RefNumber-q64c1');
        disbtn(radVal, 'q64c1-SA');
        disbtn(radVal, 'q64c1-SQ');
    }
    if(elem=='q67a'){
        disbtn(radVal, 'q67b');
            disbtn(radVal, 'RefNumber-q67b');
        disbtn(radVal, 'q67b-SA');
        disbtn(radVal, 'q67b-SQ');
    }
    if(elem=='q69a'){
        disbtn(radVal, 'q69b');
            disbtn(radVal, 'RefNumber-q69b');
        disbtn(radVal, 'q69b-SA');
        disbtn(radVal, 'q69b-SQ');
    }
    if(elem=='q71a'){
        disbtn(radVal, 'q71a1');
            disbtn(radVal, 'RefNumber-q71a1');
        disbtn(radVal, 'q71a1-SA');
        disbtn(radVal, 'q71a1-SQ');
    }
    if(elem=='q71b'){
        disbtn(radVal, 'q71b1');
            disbtn(radVal, 'RefNumber-q71b1');
        disbtn(radVal, 'q71b1-SA');
        disbtn(radVal, 'q71b1-SQ');
    }
    if(elem=='q73a'){
        disbtn(radVal, 'q73a1');
            disbtn(radVal, 'RefNumber-q73a1');
        disbtn(radVal, 'q73a1-SA');
        disbtn(radVal, 'q73a1-SQ');
    }
    if(elem=='q74a'){
        disbtn(radVal, 'q74b');
            disbtn(radVal, 'RefNumber-q74b');
        disbtn(radVal, 'q74b-SA');
        disbtn(radVal, 'q74b-SQ');
    }
    if(elem=='q75a'){
        disbtn(radVal, 'q75b');
            disbtn(radVal, 'RefNumber-q75b');
        disbtn(radVal, 'q75b-SA');
        disbtn(radVal, 'q75b-SQ');
    }
 }

    function myfunction(event) {

        if(event.target.name=='q2c'){
            disbtn(event.target.value, 'q2c1');
            disbtn(event.target.value, 'RefNumber-q2c1');
            disbtn(event.target.value, 'q2c1-SA');
            disbtn(event.target.value, 'q2c1-SQ');
        }
        if(event.target.name=='q2d'){ //q2d
            disbtn(event.target.value, 'q2d1');
            disbtn(event.target.value, 'q2d1p');
            disbtn(event.target.value, 'q2d1desc')
            disbtn(event.target.value, 'RefNumber-q2d1');
            disbtn(event.target.value, 'q2d1-SA');
           
            disbtn(event.target.value, 'q2d1-SQ');
        }
        
        if(event.target.name=='q3a3'){
            disbtn(event.target.value, 'q3b');
            disbtn(event.target.value, 'RefNumber-q3b');
            disbtn(event.target.value, 'q3b-SA');
            disbtn(event.target.value, 'q3b-SQ');
        }
        if(event.target.name=='q4a2'){
            disbtn(event.target.value, 'q4b');
            disbtn(event.target.value, 'RefNumber-q4b');
            disbtn(event.target.value, 'q4b-SA');
            disbtn(event.target.value, 'q4b-SQ');

        }
        if(event.target.name=='q6a'){
            disbtn(event.target.value, 'q6b');
            disbtn(event.target.value, 'RefNumber-q6b');
            disbtn(event.target.value, 'q6b-SA');
            disbtn(event.target.value, 'q6b-SQ');
        }
        if(event.target.name=='q7a'){
            disbtn(event.target.value, 'q7b');
            disbtn(event.target.value, 'RefNumber-q7b');
            disbtn(event.target.value, 'q7b-SA');
            disbtn(event.target.value, 'q7b-SQ');
        }
        if(event.target.name=='q7d'){
            disbtn(event.target.value, 'q7e');
            disbtn(event.target.value, 'RefNumber-q7e');
            disbtn(event.target.value, 'q7e-SA');
            disbtn(event.target.value, 'q7e-SQ');
        }
        if(event.target.name=='q8a'){
            disbtn(event.target.value, 'q8a1');
            disbtn(event.target.value, 'RefNumber-q8a1');
            // document.getElementById("q8a1-SA").disabled = true;  
            disbtn(event.target.value, 'q8a1-SA');
            disbtn(event.target.value, 'q8a1-SQ');
        }
        if(event.target.name=='q9a'){
            disbtn(event.target.value, 'q9a1');
            disbtn(event.target.value, 'RefNumber-q9a1');
            disbtn(event.target.value, 'q9a1-SA');
            disbtn(event.target.value, 'q9a1-SQ');
        }
        if(event.target.name=='q10a'){
            disbtn(event.target.value, 'q10a1');
            disbtn(event.target.value, 'RefNumber-q10a1');
            disbtn(event.target.value, 'q10a1-SA');
            disbtn(event.target.value, 'q10a1-SQ');
        }
        if(event.target.name=='q10b'){
            disbtn(event.target.value, 'q10c');
            disbtn(event.target.value, 'RefNumber-q10c');
            disbtn(event.target.value, 'q10c-SA');
            disbtn(event.target.value, 'q10c-SQ');
        }
        if(event.target.name=='q10d'){
            disbtn(event.target.value, 'q10e');
            disbtn(event.target.value, 'RefNumber-q10e');
            disbtn(event.target.value, 'q10e-SA');
            disbtn(event.target.value, 'q10e-SQ');
        }
        if(event.target.name=='q11a'){
            disbtn(event.target.value, 'q11a1');
            disbtn(event.target.value, 'RefNumber-q11a1');
            disbtn(event.target.value, 'q11a1-SA');
            disbtn(event.target.value, 'q11a1-SQ');
        }
        if(event.target.name=='q11b'){
            disbtn(event.target.value, 'q11b1');
            disbtn(event.target.value, 'RefNumber-q11b1');
            disbtn(event.target.value, 'q11b1-SA');
            disbtn(event.target.value, 'q11b1-SQ');
        }
        if(event.target.name=='q11d'){
            disbtn(event.target.value, 'q11d1');
            disbtn(event.target.value, 'RefNumber-q11d1');
            disbtn(event.target.value, 'q11d1-SA');
            disbtn(event.target.value, 'q11d1-SQ');
        }
        if(event.target.name=='q12a'){
            disbtn(event.target.value, 'q12b');
            disbtn(event.target.value, 'RefNumber-q12b');
            disbtn(event.target.value, 'q12b-SA');
            disbtn(event.target.value, 'q12b-SQ');
        }
        if(event.target.name=='q12c1'){
            disbtn(event.target.value, 'q12c1a');
            disbtn(event.target.value, 'RefNumber-q12c1a');
            disbtn(event.target.value, 'q12c1a-SA');
            disbtn(event.target.value, 'q12c1a-SQ');
        }
        if(event.target.name=='q12c2'){
            disbtn(event.target.value, 'q12c2a');
            disbtn(event.target.value, 'RefNumber-q12c2a');
            disbtn(event.target.value, 'q12c2a-SA');
            disbtn(event.target.value, 'q12c2a-SQ');
        }
        if(event.target.name=='q12c3'){
            disbtn(event.target.value, 'q12c3a');
            disbtn(event.target.value, 'RefNumber-q12c3a');
            disbtn(event.target.value, 'q12c3a-SA');
            disbtn(event.target.value, 'q12c3a-SQ');
        }
        if(event.target.name=='q13a'){
            disbtn(event.target.value, 'q13b');
             disbtn(event.target.value, 'RefNumber-q13b');
            disbtn(event.target.value, 'q13b-SA');
            disbtn(event.target.value, 'q13b-SQ');
        }
        if(event.target.name=='q14'){
            disbtn(event.target.value, 'q14a');
             disbtn(event.target.value, 'RefNumber-q14a');
            disbtn(event.target.value, 'q14a-SA');
            disbtn(event.target.value, 'q14a-SQ');
        }
        if(event.target.name=='q15a'){
            disbtn(event.target.value, 'q15a1');
             disbtn(event.target.value, 'RefNumber-q3b');
            disbtn(event.target.value, 'q3b-SA');
            disbtn(event.target.value, 'q15a1-SQ');
        }
        if(event.target.name=='q15b1'){
            disbtn(event.target.value, 'q15b1a');
             disbtn(event.target.value, 'RefNumber-q15b1a');
            disbtn(event.target.value, 'q15b1a-SA');
            disbtn(event.target.value, 'q15b1a-SQ');
        }
        if(event.target.name=='q15b2'){
            disbtn(event.target.value, 'q15b2a');
             disbtn(event.target.value, 'RefNumber-q15b2a');
            disbtn(event.target.value, 'q15b2a-SA');
            disbtn(event.target.value, 'q15b2a-SQ');
        }
        if(event.target.name=='q15b3'){
            disbtn(event.target.value, 'q15b3a');
             disbtn(event.target.value, 'RefNumber-q15b3a');
            disbtn(event.target.value, 'q15b3a-SA');
            disbtn(event.target.value, 'q15b3a-SQ');
        }
        if(event.target.name=='q16a'){
            disbtn(event.target.value, 'q16a1');
             disbtn(event.target.value, 'RefNumber-q16a1');
            disbtn(event.target.value, 'q16a1-SA');
            disbtn(event.target.value, 'q16a1-SQ');
        }
        if(event.target.name=='q16b'){
            disbtn(event.target.value, 'q16b1');
             disbtn(event.target.value, 'RefNumber-q16b1');
            disbtn(event.target.value, 'q16b1-SA');
            disbtn(event.target.value, 'q16b1-SQ');
        }
        if(event.target.name=='q16c'){
            disbtn(event.target.value, 'q16c1');
             disbtn(event.target.value, 'RefNumber-q16c1');
            disbtn(event.target.value, 'q16c1-SA');
            disbtn(event.target.value, 'q16c1-SQ');
        }
        if(event.target.name=='q16d'){
            disbtn(event.target.value, 'q16d1');
             disbtn(event.target.value, 'RefNumber-q16d1');
            disbtn(event.target.value, 'q16d1-SA');
            disbtn(event.target.value, 'q16d1-SQ');
        }
        if(event.target.name=='q17c'){
            disbtn(event.target.value, 'q17c1');
             disbtn(event.target.value, 'RefNumber-q17c1');
            disbtn(event.target.value, 'q17c1-SA');
            disbtn(event.target.value, 'q17c1-SQ');
        }
        if(event.target.name=='q17d'){
            disbtn(event.target.value, 'q17d1');
             disbtn(event.target.value, 'RefNumber-q17d1');
            disbtn(event.target.value, 'q17d1-SA');
            disbtn(event.target.value, 'q17d1-SQ');
        }
        if(event.target.name=='q17e1'){
            disbtn(event.target.value, 'q17e1a');
             disbtn(event.target.value, 'RefNumber-q17e1a');
            disbtn(event.target.value, 'q17e1a-SA');
            disbtn(event.target.value, 'q17e1a-SQ');
        }
        if(event.target.name=='q17e2'){
            disbtn(event.target.value, 'q17e2a');
             disbtn(event.target.value, 'RefNumber-q17e2a');
            disbtn(event.target.value, 'q17e2a-SA');
            disbtn(event.target.value, 'q17e2a-SQ');
        }
        if(event.target.name=='q17e3'){
            disbtn(event.target.value, 'q17e3a');
             disbtn(event.target.value, 'RefNumber-q17e3a');
            disbtn(event.target.value, 'q17e3a-SA');
            disbtn(event.target.value, 'q17e3a-SQ');
        }
        if(event.target.name=='q17f'){
            disbtn(event.target.value, 'q17g');
             disbtn(event.target.value, 'RefNumber-q17g');
            disbtn(event.target.value, 'q17g-SA');
            disbtn(event.target.value, 'q17g-SQ');
        }
        if(event.target.name=='q18a'){
            disbtn(event.target.value, 'q18a1');
             disbtn(event.target.value, 'RefNumber-q18a1');
            disbtn(event.target.value, 'q18a1-SA');
            disbtn(event.target.value, 'q18a1-SQ');
        }
        if(event.target.name=='q18b'){
            disbtn(event.target.value, 'q18b1');
             disbtn(event.target.value, 'RefNumber-q18b1');
            disbtn(event.target.value, 'q18b1-SA');
            disbtn(event.target.value, 'q18b1-SQ');
        }
        if(event.target.name=='q18c'){
            disbtn(event.target.value, 'q18c1');
             disbtn(event.target.value, 'RefNumber-q18c1');
            disbtn(event.target.value, 'q18c1-SA');
            disbtn(event.target.value, 'q18c1-SQ');
        }
        if(event.target.name=='q18d'){
            disbtn(event.target.value, 'q18d1');
             disbtn(event.target.value, 'RefNumber-q18d1');
            disbtn(event.target.value, 'q18d1-SA');
            disbtn(event.target.value, 'q18d1-SQ');
        }
        if(event.target.name=='q18e'){
            disbtn(event.target.value, 'q18e1');
             disbtn(event.target.value, 'RefNumber-q18e1');
            disbtn(event.target.value, 'q18e1-SA');
            disbtn(event.target.value, 'q18e1-SQ');
        }
        if(event.target.name=='q19a'){
            disbtn(event.target.value, 'q19a1');
             disbtn(event.target.value, 'RefNumber-q19a1');
            disbtn(event.target.value, 'q19a1-SA');
            disbtn(event.target.value, 'q19a1-SQ');
        }
        if(event.target.name=='q19d'){
            disbtn(event.target.value, 'q19d1');
             disbtn(event.target.value, 'RefNumber-q19d1');
            disbtn(event.target.value, 'q19d1-SA');
            disbtn(event.target.value, 'q19d1-SQ');
        }
        if(event.target.name=='q19e'){
            disbtn(event.target.value, 'q19e1');
             disbtn(event.target.value, 'RefNumber-q19e1');
            disbtn(event.target.value, 'q19e1-SA');
            disbtn(event.target.value, 'q19e1-SQ');
        }
        if(event.target.name=='q19f'){
            disbtn(event.target.value, 'q19f1');
             disbtn(event.target.value, 'RefNumber-q19f1');
            disbtn(event.target.value, 'q19f1-SA');
            disbtn(event.target.value, 'q19f1-SQ');
        }
        if(event.target.name=='q20a'){
            disbtn(event.target.value, 'q20a1');
             disbtn(event.target.value, 'RefNumber-q20a1');
            disbtn(event.target.value, 'q20a1-SA');
            disbtn(event.target.value, 'q20a1-SQ');
        }
        if(event.target.name=='q20b'){
            disbtn(event.target.value, 'q20b1');
             disbtn(event.target.value, 'RefNumber-q20b1');
            disbtn(event.target.value, 'q20b1-SA');
            disbtn(event.target.value, 'q20b1-SQ');
        }
        if(event.target.name=='q21a'){
            disbtn(event.target.value, 'q21a1');
             disbtn(event.target.value, 'RefNumber-q21a1');
            disbtn(event.target.value, 'q21a1-SA');
            disbtn(event.target.value, 'q21a1-SQ');
        }
       
        if(event.target.name=='q22d'){
            disbtn(event.target.value, 'q22e');
             disbtn(event.target.value, 'RefNumber-q22e');
            disbtn(event.target.value, 'q22e-SA');
            disbtn(event.target.value, 'q22e-SQ');
        }
        if(event.target.name=='q25a'){
            disbtn(event.target.value, 'q25a1');
             disbtn(event.target.value, 'RefNumber-q25a1');
            disbtn(event.target.value, 'q25a1-SA');
            disbtn(event.target.value, 'q25a1-SQ');
        }
        if(event.target.name=='q26a'){
            disbtn(event.target.value, 'q26a1');
             disbtn(event.target.value, 'RefNumber-q26a1');
            disbtn(event.target.value, 'q26a1-SA');
            disbtn(event.target.value, 'q26a1-SQ');
        }
        if(event.target.name=='q26e'){
            disbtn(event.target.value, 'q26e1');
             disbtn(event.target.value, 'RefNumber-q26e1');
            disbtn(event.target.value, 'q26e1-SA');
            disbtn(event.target.value, 'q26e1-SQ');
        }
        if(event.target.name=='q27a'){
            disbtn(event.target.value, 'q27a1');
             disbtn(event.target.value, 'RefNumber-q27a1');
            disbtn(event.target.value, 'q27a1-SA');
            disbtn(event.target.value, 'q27a1-SQ');
        }
        if(event.target.name=='q27b'){
            disbtn(event.target.value, 'q27b1');
             disbtn(event.target.value, 'RefNumber-q27b1');
            disbtn(event.target.value, 'q27b1-SA');
            disbtn(event.target.value, 'q27b1-SQ');
        }
        if(event.target.name=='q27c'){
            disbtn(event.target.value, 'q27c1');
             disbtn(event.target.value, 'RefNumber-q27c1');
            disbtn(event.target.value, 'q27c1-SA');
            disbtn(event.target.value, 'q27c1-SQ');
        }
        if(event.target.name=='q28a'){
            disbtn(event.target.value, 'q28b');
             disbtn(event.target.value, 'RefNumber-q28b');
            disbtn(event.target.value, 'q28b-SA');
            disbtn(event.target.value, 'q28b-SQ');
        }
        if(event.target.name=='q30b'){
            disbtn(event.target.value, 'q30b1');
             disbtn(event.target.value, 'RefNumber-q30b1');
            disbtn(event.target.value, 'q30b1-SA');
            disbtn(event.target.value, 'q30b1-SQ');
        }
        if(event.target.name=='q30c'){
            disbtn(event.target.value, 'q30c1');
             disbtn(event.target.value, 'RefNumber-q30c1');
            disbtn(event.target.value, 'q30c1-SA');
            disbtn(event.target.value, 'q30c1-SQ');
        }
        if(event.target.name=='q31a'){
            disbtn(event.target.value, 'q31a1');
             disbtn(event.target.value, 'RefNumber-q31a1');
            disbtn(event.target.value, 'q31a1-SA');
            disbtn(event.target.value, 'q31a1-SQ');
        }
        if(event.target.name=='q31b'){
            disbtn(event.target.value, 'q31b1');
             disbtn(event.target.value, 'RefNumber-q31b1');
            disbtn(event.target.value, 'q31b1-SA');
            disbtn(event.target.value, 'q31b1-SQ');
        }
        if(event.target.name=='q31c'){
            disbtn(event.target.value, 'q31c1');
             disbtn(event.target.value, 'RefNumber-q31c1');
            disbtn(event.target.value, 'q31c1-SA');
            disbtn(event.target.value, 'q31c1-SQ');
        }
        if(event.target.name=='q32a'){
            disbtn(event.target.value, 'q32a1');
             disbtn(event.target.value, 'RefNumber-q32a1');
            disbtn(event.target.value, 'q32a1-SA');
            disbtn(event.target.value, 'q32a1-SQ');
        }
        if(event.target.name=='q32b'){
            disbtn(event.target.value, 'q32b1');
             disbtn(event.target.value, 'RefNumber-q32b1');
            disbtn(event.target.value, 'q32b1-SA');
            disbtn(event.target.value, 'q32b1-SQ');
        }
        if(event.target.name=='q32c1'){
            disbtn(event.target.value, 'q32c1a');
             disbtn(event.target.value, 'RefNumber-q32c1a');
            disbtn(event.target.value, 'q32c1a-SA');
            disbtn(event.target.value, 'q32c1a-SQ');
        }
        if(event.target.name=='q32c2'){
            disbtn(event.target.value, 'q32c2a');
             disbtn(event.target.value, 'RefNumber-q32c2a');
            disbtn(event.target.value, 'q32c2a-SA');
            disbtn(event.target.value, 'q32c2a-SQ');
        }
        if(event.target.name=='q32c3'){
            disbtn(event.target.value, 'q32c3a');
             disbtn(event.target.value, 'RefNumber-q32c3a');
            disbtn(event.target.value, 'q32c3a-SA');
            disbtn(event.target.value, 'q32c3a-SQ');
        }
        if(event.target.name=='q32c4'){
            disbtn(event.target.value, 'q32c4a');
             disbtn(event.target.value, 'RefNumber-q32c4a');
            disbtn(event.target.value, 'q32c4a-SA');
            disbtn(event.target.value, 'q32c4a-SQ');
        }
        if(event.target.name=='q32d'){
            disbtn(event.target.value, 'q32d1');
             disbtn(event.target.value, 'RefNumber-q32d1');
            disbtn(event.target.value, 'q32d1-SA');
            disbtn(event.target.value, 'q32d1-SQ');
        }
        if(event.target.name=='q32e'){
            disbtn(event.target.value, 'q32e1');
             disbtn(event.target.value, 'RefNumber-q32e1');
            disbtn(event.target.value, 'q32e1-SA');
            disbtn(event.target.value, 'q32e1-SQ');
        }
        if(event.target.name=='q33a'){
            disbtn(event.target.value, 'q33b');
             disbtn(event.target.value, 'RefNumber-q33b');
            disbtn(event.target.value, 'q33b-SA');
            disbtn(event.target.value, 'q33b-SQ');
        }
        if(event.target.name=='q34a'){
            disbtn(event.target.value, 'q34a1');
             disbtn(event.target.value, 'RefNumber-q34a1');
            disbtn(event.target.value, 'q34a1-SA');
            disbtn(event.target.value, 'q34a1-SQ');
        }
        if(event.target.name=='q34c'){
            disbtn(event.target.value, 'q34c1');
             disbtn(event.target.value, 'RefNumber-q34c1');
            disbtn(event.target.value, 'q34c1-SA');
            disbtn(event.target.value, 'q34c1-SQ');
        }
        if(event.target.name=='q35a1'){
            disbtn(event.target.value, 'q35a1a');
             disbtn(event.target.value, 'RefNumber-q35a1a');
            disbtn(event.target.value, 'q35a1a-SA');
            disbtn(event.target.value, 'q35a1a-SQ');
        }
        if(event.target.name=='q35a2'){
            disbtn(event.target.value, 'q35a2a');
             disbtn(event.target.value, 'RefNumber-q35a2a');
            disbtn(event.target.value, 'q35a2a-SA');
            disbtn(event.target.value, 'q35a2a-SQ');
        }
        if(event.target.name=='q35a3'){
            disbtn(event.target.value, 'q35a3a');
             disbtn(event.target.value, 'RefNumber-q35a3a');
            disbtn(event.target.value, 'q35a3a-SA');
            disbtn(event.target.value, 'q35a3a-SQ');
        }
        if(event.target.name=='q35c'){
            disbtn(event.target.value, 'q35c1');
             disbtn(event.target.value, 'RefNumber-q35c1');
            disbtn(event.target.value, 'q35c1-SA');
            disbtn(event.target.value, 'q35c1-SQ');
        }
        if(event.target.name=='q36a'){
            disbtn(event.target.value, 'q36a1');
             disbtn(event.target.value, 'RefNumber-q36a1');
            disbtn(event.target.value, 'q36a1-SA');
            disbtn(event.target.value, 'q36a1-SQ');
        }
        if(event.target.name=='q37a'){
            disbtn(event.target.value, 'q37b');
             disbtn(event.target.value, 'RefNumber-q37b');
            disbtn(event.target.value, 'q37b-SA');
            disbtn(event.target.value, 'q37b-SQ');
        }
        if(event.target.name=='q39d'){
            disbtn(event.target.value, 'q39e');
             disbtn(event.target.value, 'RefNumber-q39e');
            disbtn(event.target.value, 'q39e-SA');
            disbtn(event.target.value, 'q39e-SQ');
        }
        if(event.target.name=='q42b'){
            disbtn(event.target.value, 'q42b1');
             disbtn(event.target.value, 'RefNumber-q42b1');
            disbtn(event.target.value, 'q42b1-SA');
            disbtn(event.target.value, 'q42b1-SQ');
        }
        if(event.target.name=='q43a'){
            disbtn(event.target.value, 'q43a1');
             disbtn(event.target.value, 'RefNumber-q43a1');
            disbtn(event.target.value, 'q43a1-SA');
            disbtn(event.target.value, 'q43a1-SQ');
        }
        if(event.target.name=='q43b'){
            disbtn(event.target.value, 'q43b1');
             disbtn(event.target.value, 'RefNumber-q43b1');
            disbtn(event.target.value, 'q43b1-SA');
            disbtn(event.target.value, 'q43b1-SQ');
        }
        if(event.target.name=='q44a'){
            disbtn(event.target.value, 'q44b');
             disbtn(event.target.value, 'RefNumber-q44b');
            disbtn(event.target.value, 'q44b-SA');
            disbtn(event.target.value, 'q44b-SQ');
        }
        if(event.target.name=='q50'){
            disbtn(event.target.value, 'q50a');
             disbtn(event.target.value, 'RefNumber-q50a');
            disbtn(event.target.value, 'q50a-SA');
            disbtn(event.target.value, 'q50a-SQ');
        }
        if(event.target.name=='q56a'){
            disbtn(event.target.value, 'q56b');
             disbtn(event.target.value, 'RefNumber-q56b');
            disbtn(event.target.value, 'q56b-SA');
            disbtn(event.target.value, 'q56b-SQ');
        }
        if(event.target.name=='q57c1'){
            disbtn(event.target.value, 'q57c1a');
             disbtn(event.target.value, 'RefNumber-q57c1a');
            disbtn(event.target.value, 'q57c1a-SA');
            disbtn(event.target.value, 'q57c1a-SQ');
        }
        if(event.target.name=='q58a'){
            disbtn(event.target.value, 'q58a1');
             disbtn(event.target.value, 'RefNumber-q58a1');
            disbtn(event.target.value, 'q58a1-SA');
            disbtn(event.target.value, 'q58a1-SQ');
        }
        if(event.target.name=='q59a'){
            disbtn(event.target.value, 'q59b');
             disbtn(event.target.value, 'RefNumber-q59b');
            disbtn(event.target.value, 'q59b-SA');
            disbtn(event.target.value, 'q59b-SQ');
        }
        if(event.target.name=='q60a1'){
            disbtn(event.target.value, 'q60a1a');
             disbtn(event.target.value, 'RefNumber-q60a1a');
            disbtn(event.target.value, 'q60a1a-SA');
            disbtn(event.target.value, 'q60a1a-SQ');
        }
        if(event.target.name=='q60a2'){
            disbtn(event.target.value, 'q60a2a');
             disbtn(event.target.value, 'RefNumber-q60a2a');
            disbtn(event.target.value, 'q60a2a-SA');
            disbtn(event.target.value, 'q60a2a-SQ');
        }
        if(event.target.name=='q60a3'){
            disbtn(event.target.value, 'q60a3a');
             disbtn(event.target.value, 'RefNumber-q60a3a');
            disbtn(event.target.value, 'q60a3a-SA');
            disbtn(event.target.value, 'q60a3a-SQ');
        }
        if(event.target.name=='q60a4'){
            disbtn(event.target.value, 'q60a4a');
             disbtn(event.target.value, 'RefNumber-q60a4a');
            disbtn(event.target.value, 'q60a4a-SA');
            disbtn(event.target.value, 'q60a4a-SQ');
        }
        if(event.target.name=='q61b1'){
            disbtn(event.target.value, 'q61b1a');
             disbtn(event.target.value, 'RefNumber-q61b1a');
            disbtn(event.target.value, 'q61b1a-SA');
            disbtn(event.target.value, 'q61b1a-SQ');
        }
        if(event.target.name=='q61b2'){
            disbtn(event.target.value, 'q61b2a');
             disbtn(event.target.value, 'RefNumber-q61b2a');
            disbtn(event.target.value, 'q61b2a-SA');
            disbtn(event.target.value, 'q61b2a-SQ');
        }
        if(event.target.name=='q64a'){
            disbtn(event.target.value, 'q64a1');
             disbtn(event.target.value, 'RefNumber-q64a1');
            disbtn(event.target.value, 'q64a1-SA');
            disbtn(event.target.value, 'q64a1-SQ');
        }
        if(event.target.name=='q64b'){
            disbtn(event.target.value, 'q64b1');
             disbtn(event.target.value, 'RefNumber-q64b1');
            disbtn(event.target.value, 'q64b1-SA');
            disbtn(event.target.value, 'q64b1-SQ');
        }
        if(event.target.name=='q64c'){
            disbtn(event.target.value, 'q64c1');
             disbtn(event.target.value, 'RefNumber-q64c1');
            disbtn(event.target.value, 'q64c1-SA');
            disbtn(event.target.value, 'q64c1-SQ');
        }
        if(event.target.name=='q67a'){
            disbtn(event.target.value, 'q67b');
             disbtn(event.target.value, 'RefNumber-q67b');
            disbtn(event.target.value, 'q67b-SA');
            disbtn(event.target.value, 'q67b-SQ');
        }
        if(event.target.name=='q69a'){
            disbtn(event.target.value, 'q69b');
             disbtn(event.target.value, 'RefNumber-q69b');
            disbtn(event.target.value, 'q69b-SA');
            disbtn(event.target.value, 'q69b-SQ');
        }
        if(event.target.name=='q71a'){
            disbtn(event.target.value, 'q71a1');
             disbtn(event.target.value, 'RefNumber-q71a1');
            disbtn(event.target.value, 'q71a1-SA');
            disbtn(event.target.value, 'q71a1-SQ');
        }
        if(event.target.name=='q71b'){
            disbtn(event.target.value, 'q71b1');
             disbtn(event.target.value, 'RefNumber-q71b1');
            disbtn(event.target.value, 'q71b1-SA');
            disbtn(event.target.value, 'q71b1-SQ');
        }
        if(event.target.name=='q73a'){
            disbtn(event.target.value, 'q73a1');
             disbtn(event.target.value, 'RefNumber-q73a1');
            disbtn(event.target.value, 'q73a1-SA');
            disbtn(event.target.value, 'q73a1-SQ');
        }
        if(event.target.name=='q74a'){
            disbtn(event.target.value, 'q74b');
             disbtn(event.target.value, 'RefNumber-q74b');
            disbtn(event.target.value, 'q74b-SA');
            disbtn(event.target.value, 'q74b-SQ');
        }
        if(event.target.name=='q75a'){
            disbtn(event.target.value, 'q75b');
             disbtn(event.target.value, 'RefNumber-q75b');
            disbtn(event.target.value, 'q75b-SA');
            disbtn(event.target.value, 'q75b-SQ');
        }
       
    }
    document.querySelectorAll("input[name='q2c']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q2d']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q3a3']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });

    document.querySelectorAll("input[name='q4a2']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q6a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q7a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    
    document.querySelectorAll("input[name='q7d']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    
    document.querySelectorAll("input[name='q8a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });

    document.querySelectorAll("input[name='q9a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
  
    document.querySelectorAll("input[name='q10a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q10b']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q10d']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q11a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q11b']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q11d']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q12a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q12c1']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q12c2']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q12c3']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q13a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q14']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q15a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q15b1']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q15b2']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q15b3']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q16a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q16b']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q16c']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q16d']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q17c']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q17d']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q17e1']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q17e2']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q17e3']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q17f']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q18a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q18b']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q18c']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q18d']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q18e']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q19a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q19d']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q19e']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q19f']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q20a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q20b']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q21a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
     document.querySelectorAll("input[name='q21b']").forEach((input) => {
        input.addEventListener('change', myfunctionop);
    });
    document.querySelectorAll("input[name='q22d']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q25a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q26a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q26e']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q27a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q27b']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q27c']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q28a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q30b']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q30c']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q31a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q31b']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q31c']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q32a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q32b']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q32c1']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q32c2']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q32c3']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q32c4']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q32d']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q32e']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q33a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q34a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q34c']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q35a1']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q35a2']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
  
    document.querySelectorAll("input[name='q35a3']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q35c']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q36a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q37a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q39d']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q42b']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q43a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q43b']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
   document.querySelectorAll("input[name='q44a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
   document.querySelectorAll("input[name='q50']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
   document.querySelectorAll("input[name='q56a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q57c1']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q58a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q59a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q60a1']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q60a2']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q60a3']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q60a4']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q61b1']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q61b2']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q64a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q64b']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q64c']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q67a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q69a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
   
    document.querySelectorAll("input[name='q71a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q71b']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q73a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q74a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    document.querySelectorAll("input[name='q75a']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
    
    function disbtn(val,setc) { 
        // console.log(val, setc, "SETTING DISABLE");
        if ( val == 'No' ) {
            var radios = document.getElementsByName(setc);
            // console.log(radios, "RADIOSSSS");
            
            for (var i = 0, r=radios, l=r.length; i < l;  i++){
                r[i].disabled = true;
                r[i].required = false;

                $(r[i]).removeClass('required');
            }

            $("#" + setc).val("");
            $("#" + setc).removeClass("required");
            // document.getElementById(setc).setAttribute("disabled","disabled");
        } else {
            var radios = document.getElementsByName(setc);
            
            for (var i = 0, r=radios, l=r.length; i < l;  i++){
                r[i].disabled = false;
                r[i].required = true;
                $(r[i]).addClass('required');
            }

            // document.getElementById(setc).removeAttribute("disabled");
            $("#" + setc).addClass("required");
        }

    }
function disbtnop(val,setc) { 
        // console.log(val, setc, "SETTING DISABLE");
    if ( val == 'Yes' ) {
        var radios = document.getElementsByName(setc);
        // console.log(radios, "RADIOSSSS");
        debugger;
            for (var i = 0, r=radios, l=r.length; i < l;  i++){
                r[i].disabled = true;
                r[i].required = false;
            }
       document.getElementById(setc).setAttribute("disabled","disabled");
    } else {
        var radios = document.getElementsByName(setc);
        debugger;
            for (var i = 0, r=radios, l=r.length; i < l;  i++){
                r[i].disabled = false;
                r[i].required = true;
            }
       document.getElementById(setc).removeAttribute("disabled");
    }

}


document.querySelectorAll("input[name='q1-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q2a-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q2b1-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q2b2-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q2c-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q2c1-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q2d-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q2d1-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q3a1-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q3a2-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q3a3-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q3b-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q4a1-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q4a2-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q4b-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q5a-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q5b-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q5c-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q5d-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q5e-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q5f-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q6a-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q6b-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q6c-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q6d-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q7a-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q7b-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q7c1-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q7c2-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q7c3-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q7d-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q7e-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q7f-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q7g-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q8a-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q8a1-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q8b-SA']").forEach((input) => { input.addEventListener('change', calcscore); });
document.querySelectorAll("input[name='q8c-SA']").forEach((input) => { input.addEventListener('change', calcscore); });



function calcscore(event) {
   var foundIndex = -1;
   tab1_radio_qn_array.forEach(function(item,index){
        if(tab1_radio_qn_array[index] == event.target.name){
            foundIndex = index;
        }
    })
    if(foundIndex == -1){
        tab1_radio_qn_array.push(event.target.name);
        tab1_radio_ans_array.push(event.target.value);
    }
    else{
        tab1_radio_ans_array[foundIndex] = event.target.value;
    }
    total_of_t1=0;
    tab1_radio_ans_array.forEach(function(item, index){
        total_of_t1 = parseInt(total_of_t1) + parseInt(item);
    })
    document.getElementById('scbyaftotalt1').innerHTML = total_of_t1;
}


document.querySelectorAll("input[name='q9a-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q9a1-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q9b-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q9c-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q10a-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q10a1-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q10b-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q10c-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q10d-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q10e-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q11a-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q11a1-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q11b-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q11b1-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q11b2-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q11c-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q11c1-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q11c2-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q11c3-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q11d-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q11d1-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q12a-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q12b-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q12c1-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q12c1a-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q12c2-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q12c2a-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q12c3-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q12c3a-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q13a-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });
document.querySelectorAll("input[name='q13b-SA']").forEach((input) => { input.addEventListener('change', calcscore2); });

function calcscore2(event) {
   var foundIndex = -1;
   tab2_radio_qn_array.forEach(function(item,index){
        if(tab2_radio_qn_array[index] == event.target.name){
            foundIndex = index;
        }
    })
    if(foundIndex == -1){
        tab2_radio_qn_array.push(event.target.name);
        tab2_radio_ans_array.push(event.target.value);
    }
    else{
        tab2_radio_ans_array[foundIndex] = event.target.value;
    }
    total_of_t2=0;
    tab2_radio_ans_array.forEach(function(item, index){
        total_of_t2 = parseInt(total_of_t2) + parseInt(item);
    })
    document.getElementById('scbyaftotalt2').innerHTML = total_of_t2;
}


document.querySelectorAll("input[name='q14-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q14a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q15a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q15a1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q15a2n-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q15a2p-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q15b1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q15b1a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q15b2-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q15b2a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q15b3-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q15b3a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16a1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16a2-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16a3-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16a4-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16a5-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16b-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16b1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16b2-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16b2a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16b2b-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16c-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16c1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16c2-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16c3-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16d-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16d1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16d2-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q16d3-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17a1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17a2-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17a3-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17b-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17c-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17c1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17c2-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17d-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17d1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17e1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17e1a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17e2-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17e2a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17e2b-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17e3-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17e3a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17f-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q17g-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18a1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18a2-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18a3-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18a4-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18a5-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18b-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18b1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18c-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18c1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18d-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18d1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18e-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q18e1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19a1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19b-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19b1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19c1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19c2-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19d-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19d1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19e-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19e1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19f-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19f1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19f2h-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q19f2p-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q20a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q20a1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q20a1a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q20a1b-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q20a1c-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q20b-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q20b1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q20c-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q21a-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q21a1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q21b-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q21b1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q21c1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q21c2-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q21d1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q21d2-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q21e-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });
document.querySelectorAll("input[name='q21e1-SA']").forEach((input) => { input.addEventListener('change', calcscore3); });

function calcscore3(event) {
   var foundIndex = -1;
   tab3_radio_qn_array.forEach(function(item,index){
        if(tab3_radio_qn_array[index] == event.target.name){
            foundIndex = index;
        }
    })
    if(foundIndex == -1){
        tab3_radio_qn_array.push(event.target.name);
        tab3_radio_ans_array.push(event.target.value);
    }
    else{
        tab3_radio_ans_array[foundIndex] = event.target.value;
    }
    total_of_t3=0;
    tab3_radio_ans_array.forEach(function(item, index){
    total_of_t3 = parseInt(total_of_t3) + parseInt(item);
    })
    document.getElementById('scbyaftotalt3').innerHTML = total_of_t3;
}


document.querySelectorAll("input[name='q22b1-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q22b2-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q22b3-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q22c-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q22d-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q22e-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q23a-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q23a1-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q23a2-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q23b-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q23c-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q23c1-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q23c2-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q24a-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q24b1-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q24b2-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q24b3-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q24b4-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q24b5-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q24b6-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q24b7-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q24b7a-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q25a-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q25a1-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q25b1-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q25b2-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q26a-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q26a1-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q26b-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q26c-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q26d-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q26e-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });
document.querySelectorAll("input[name='q26e1-SA']").forEach((input) => { input.addEventListener('change', calcscore4); });


function calcscore4(event) {
   var foundIndex = -1;
   tab4_radio_qn_array.forEach(function(item,index){
        if(tab4_radio_qn_array[index] == event.target.name){
            foundIndex = index;
        }
    })
    if(foundIndex == -1){
        tab4_radio_qn_array.push(event.target.name);
        tab4_radio_ans_array.push(event.target.value);
    }
    else{
        tab4_radio_ans_array[foundIndex] = event.target.value;
    }
    total_of_t4=0;
    tab4_radio_ans_array.forEach(function(item, index){
    total_of_t4 = parseInt(total_of_t4) + parseInt(item);
    })
    document.getElementById('scbyaftotalt4').innerHTML = total_of_t4;
}

document.querySelectorAll("input[name='q27a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q27a1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q27b-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q27b1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q27c-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q27c1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q28a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q28b-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q29-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q30a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q30a1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q30b-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q30b1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q30b2-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q30c-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q30c1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31a1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31b-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31b1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31c-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31c1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31d-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31e-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31f-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31g-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31h-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31i-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31j1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31j2-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31j3-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q31j4-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32a1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32a2-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32a3-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32a4-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32a5a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32a5b-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32a6-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32b-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32b1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32c1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32c1a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32c2-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32c2a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32c3-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32c3a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32c4-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32c4a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32d-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32d1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32e-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32e1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32e2-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32e3a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q32e3b-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q33a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q33b-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34a1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34a2-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34a3a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34a3b-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34a4a-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34a4b-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34a5-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34a6-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34b-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34c-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34c1-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34d-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34e-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });
document.querySelectorAll("input[name='q34f-SA']").forEach((input) => { input.addEventListener('change', calcscore5); });



function calcscore5(event) {
   var foundIndex = -1;
   tab5_radio_qn_array.forEach(function(item,index){
        if(tab5_radio_qn_array[index] == event.target.name){
            foundIndex = index;
        }
    })
    if(foundIndex == -1){
        tab5_radio_qn_array.push(event.target.name);
        tab5_radio_ans_array.push(event.target.value);
    }
    else{
        tab5_radio_ans_array[foundIndex] = event.target.value;
    }
    total_of_t5=0;
    tab5_radio_ans_array.forEach(function(item, index){
    total_of_t5 = parseInt(total_of_t5) + parseInt(item);
    })
    document.getElementById('scbyaftotalt5').innerHTML = total_of_t5;
}

document.querySelectorAll("input[name='q35a1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q35a1a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q35a2-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q35a2a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q35a3-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q35a3a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q35b1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q35b2-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q35c-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q35c1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q36a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q36a1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q36b1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q36b2-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q36b3-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q36b4-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q36b5-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q36c1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q36c2-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q36c3-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q36c4-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q36c5-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q37a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q37b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q38a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q38b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q38c-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q38d-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q38e-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q39a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q39b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q39b1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q39b2-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q39b3-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q39b4-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q39b5-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q39b6-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q39b7-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q39c-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q39d-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q39e-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q40a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q40b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q40c-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q40d-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q40e-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q41-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q42a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q42b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q42b1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q43a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q43a1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q43b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q43b1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q44a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q44b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q45-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q46a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q47a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q48a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q48b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q48b1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q48b2-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q48b3-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q48c-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q48d-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q49a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q49b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q49c-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q49d-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q49e-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q49f-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q49g-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q49h-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q49i-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q50-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q50a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q51a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q51a1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q51b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q52a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q52b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q52c-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q52d-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q52e-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q52f-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q53a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q53b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q53c-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q54a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q54b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q54c-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q55a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q55b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q55c-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q56a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q56b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57a1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57a2-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57a3-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57b1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57b2-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57b3-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57c1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57c1a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57c1b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57c2-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57c2a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57c2b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57c2c-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57c3-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q57c4-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q58a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q58a1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q58b1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q58b2-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q58b3-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q59a-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q59b-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q59c1-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });
document.querySelectorAll("input[name='q59c2-SA']").forEach((input) => { input.addEventListener('change', calcscore6); });


function calcscore6(event) {
   var foundIndex = -1;
   tab6_radio_qn_array.forEach(function(item,index){
        if(tab6_radio_qn_array[index] == event.target.name){
            foundIndex = index;
        }
    })
    if(foundIndex == -1){
        tab6_radio_qn_array.push(event.target.name);
        tab6_radio_ans_array.push(event.target.value);
    }
    else{
        tab6_radio_ans_array[foundIndex] = event.target.value;
    }
    total_of_t6=0;
    tab6_radio_ans_array.forEach(function(item, index){
    total_of_t6 = parseInt(total_of_t6) + parseInt(item);
    })
    document.getElementById('scbyaftotalt6').innerHTML = total_of_t6;
}

document.querySelectorAll("input[name='q60a1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q60a1a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q60a2-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q60a2a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q60a3-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q60a3a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q60a4-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q60a4a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q60b-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q61a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q61a1a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q61a1b-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q61a1c-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q61b1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q61b1a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q61b2-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q61b2a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q62a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q62b-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q62c-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q62d-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q62e-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q62f-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q62g-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63a1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63a2-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63a3-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63a4-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63b1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63b2-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63b3-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63b4-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63c1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63c2-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63c3-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63c4-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63c5-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63c6-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63d1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63d2-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63e-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63f-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63g-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q63h-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q64a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q64a1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q64b-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q64b1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q64c-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q64c1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q65-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q66a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q66b-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q66c-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q66d-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q67a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q67b-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q68a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q168b-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q68c1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q68c2-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q68c3-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q69a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q69b1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q69b2-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q69b3-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q70a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q70b-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q70c-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q70d-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q70e-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q71a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q71a1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q71b-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q71b1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q72-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q73a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q73a1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q73b1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q73b-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q73c-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q73d1-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q73d2-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q74a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q74b-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q75a-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });
document.querySelectorAll("input[name='q75b-SA']").forEach((input) => { input.addEventListener('change', calcscore7); });



function calcscore7(event) {
   var foundIndex = -1;
   tab7_radio_qn_array.forEach(function(item,index){
        if(tab7_radio_qn_array[index] == event.target.name){
            foundIndex = index;
        }
    })
    if(foundIndex == -1){
        tab7_radio_qn_array.push(event.target.name);
        tab7_radio_ans_array.push(event.target.value);
    }
    else{
        tab7_radio_ans_array[foundIndex] = event.target.value;
    }
    total_of_t7=0;
    tab6_radio_ans_array.forEach(function(item, index){
    total_of_t7 = parseInt(total_of_t7) + parseInt(item);
    })
    document.getElementById('scbyaftotalt7').innerHTML = total_of_t7;
}

</script>
<script>
var tab1_radio_qn_array=<?php echo json_encode($tb1_array_qn);?>;
var tab1_radio_ans_array=<?php echo json_encode($tb1_array_ans); ?>;
var total_of_t1=0;
calcscorePre();
var tab2_radio_qn_array=<?php echo json_encode($tb2_array_qn); ?>;
var tab2_radio_ans_array=<?php echo json_encode($tb2_array_ans); ?>;
var total_of_t2=0;
calcscore2Pre();

var tab3_radio_qn_array=<?php echo json_encode($tb3_array_qn); ?>;
var tab3_radio_ans_array=<?php echo json_encode($tb3_array_ans); ?>;
var total_of_t3=0;
calcscore3Pre();

var tab4_radio_qn_array=<?php echo json_encode($tb4_array_qn); ?>;
var tab4_radio_ans_array=<?php echo json_encode($tb4_array_ans); ?>;
var total_of_t4=0;
calcscore4Pre();

var tab5_radio_qn_array=<?php echo json_encode($tb5_array_qn); ?>;
var tab5_radio_ans_array=<?php echo json_encode($tb5_array_ans); ?>;
var total_of_t5=0;
calcscore5Pre();

var tab6_radio_qn_array=<?php echo json_encode($tb6_array_qn); ?>;
var tab6_radio_ans_array=<?php echo json_encode($tb6_array_ans); ?>;
var total_of_t6=0;
calcscore6Pre();

var tab7_radio_qn_array=<?php echo json_encode($tb7_array_qn); ?>;
var tab7_radio_ans_array=<?php echo json_encode($tb7_array_ans); ?>;
var total_of_t7=0;
calcscore7Pre();

function calcscorePre(){ 
    total_of_t1=0;
    
    
    tab1_radio_ans_array.forEach(function(item, index){
        total_of_t1 = parseInt(total_of_t1) + parseInt(item);
    })
    
    document.getElementById('scbyaftotalt1').innerHTML = total_of_t1;
}
function calcscore2Pre(){ 
    total_of_t2=0;
    
    
    tab2_radio_ans_array.forEach(function(item, index){
        total_of_t2 = parseInt(total_of_t2) + parseInt(item);
    })
    
    document.getElementById('scbyaftotalt2').innerHTML = total_of_t2;
}
function calcscore3Pre(){ 
    total_of_t3=0;
    
    
    tab3_radio_ans_array.forEach(function(item, index){
        total_of_t3 = parseInt(total_of_t3) + parseInt(item);
    })
    
    document.getElementById('scbyaftotalt3').innerHTML = total_of_t3;
}
function calcscore4Pre(){ 
    total_of_t4=0;
    
    
    tab4_radio_ans_array.forEach(function(item, index){
        total_of_t4 = parseInt(total_of_t4) + parseInt(item);
    })
    
    document.getElementById('scbyaftotalt4').innerHTML = total_of_t4;
}
function calcscore5Pre(){ 
    total_of_t5=0;
    
    
    tab5_radio_ans_array.forEach(function(item, index){
        total_of_t5 = parseInt(total_of_t5) + parseInt(item);
    })
    
    document.getElementById('scbyaftotalt5').innerHTML = total_of_t5;
}
function calcscore6Pre(){ 
    total_of_t6=0;
    
    
    tab6_radio_ans_array.forEach(function(item, index){
        total_of_t6 = parseInt(total_of_t6) + parseInt(item);
    })
    
    document.getElementById('scbyaftotalt6').innerHTML = total_of_t6;
}
function calcscore7Pre(){ 
    total_of_t7=0;
    
    
    tab7_radio_ans_array.forEach(function(item, index){
        total_of_t7 = parseInt(total_of_t7) + parseInt(item);
    })
    
    document.getElementById('scbyaftotalt7').innerHTML = total_of_t7;
}
       

        
    </script>
<?php /**PATH /Volumes/T7/Macs/htdocs/qrb/resources/views/form/multi_form.blade.php ENDPATH**/ ?>