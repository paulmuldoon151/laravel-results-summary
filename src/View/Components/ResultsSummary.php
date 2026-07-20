<?php

namespace PaulMuldoon\ResultsSummary\View\Components;

use Closure;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class ResultsSummary extends Component
{
    public function __construct(
        public Collection|AbstractPaginator $items,
        public ?string $empty = null,
        protected ViewFactory $view,
    ) {
        $this->empty ??= 'results-summary::messages.no_results';
    }

    public function render(): View|Closure|string
    {
        return $this->view->make('results-summary::components.results-summary');
    }
}
