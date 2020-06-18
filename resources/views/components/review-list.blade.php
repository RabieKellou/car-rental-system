<div class="container review-area">
    @forelse($reviews as $review)
    <div class="review-star">
        <p class="rating">
            @for($i = 1; $i <=5;$i++) <i class="fa fa-star @unless($i<=$review->rating)unmark @endunless"
                data-value="{{ $i }}"></i>
                @endfor
        </p>

    </div>
    <div class="row">

        <h3>{{ $review->user->first_name .' '. $review->user->last_name }}</h3>

    </div>
    <p>{{ $review->content }}</p>
    <div class="text-right">
        <em>{{ $review->updated_at->diffForHumans() }}</em>
    </div>
    <hr>
    @empty
    <p>no reviews yet </p>
    @endforelse
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>
