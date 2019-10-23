@extends('layout.app', ['inverted' => 'true'])
@section('body')
<section id="cd-timeline" class="body-wrapper cd-container">
    <div class="cd-timeline-block">
        <div class="cd-timeline-img">
            <img src='../img/icon/initialize.png' alt='initialize'>
        </div>

        <div class="cd-timeline-content">
            <h2>Initial Contract</h2>
            <p>
                For custom design, we will be requesting pictures or sketches and information of 
                products for our R&D to determine the cost of development. A reliable quote will
                be submitted within 48 hours.
            </p>
        </div>
    </div>

    <div class="cd-timeline-block">
        <div class="cd-timeline-img">
            <img src='../img/icon/proposal.png' alt='proposal'>
        </div>

        <div class="cd-timeline-content">
            <h2>Quotation Proposal</h2>
            <p>
                After product selection or custom design research, the fee quote will be sent. If 
                approved, 30% deposit payment invoice will be sent to you. The minimum order quantity
                (MOQ) is 10 pcs/design for existing design and 25 pcs/design for custom design.
            </p>
        </div>
    </div>

    <div class="cd-timeline-block">
        <div class="cd-timeline-img">
            <img src='../img/icon/production.png' alt='production'>
        </div>

        <div class="cd-timeline-content">
            <h2>Agreement & Production</h2>
            <p>
                Upon payment of deposit, the production will start. Normal production lead time is 
                75 days. For custom design, we will need 1 month for pre-production sampling and
                2 months production after sample approval.
            </p>
        </div>
    </div>

    <div class="cd-timeline-block">
        <div class="cd-timeline-img">
            <img src='../img/icon/package.png' alt='package'>
        </div>

        <div class="cd-timeline-content">
            <h2>Finishing & Delivery</h2>
            <p>
                All furniture will be packed with the most optimal method and delivered with the copy
                of documents, if needed. Then, the final invoice will be sent and upon balanced payment,
                you will receive all official document immediately.
            </p>
        </div>
    </div>
</section>
@endsection

@section('script')
<script  src="../js/timeline.js"></script>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="../css/timeline.css">
@endsection
