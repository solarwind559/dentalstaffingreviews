<?php $case_results = get_option('otm_theme_options')['case_results']; ?>

<div class="case-results-section">
    <div class="container">
        <div class="row">
            <?php if($case_results) { ?>
                <?php foreach($case_results as $case_result) { ?>
                    <div class="case-result-wrapper col-12 col-md-4 d-flex flex-column align-items-center justify-content-center">
                    <?php if ($case_result['field_1']) { ?>
                        <p><?php echo $case_result['field_1'] ?></p>
                    <?php } ?>
                    <?php if ($case_result['field_2']) { ?>
                        <p><?php echo $case_result['field_2'] ?></p>
                    <?php } ?>
                    <?php if ($case_result['field_3']) { ?>
                        <p><?php echo $case_result['field_3'] ?></p>
                    <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>