<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $value  , public string $label = '' , public string $type='text')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }

    public function form(Form $form): Form
{
    return $form
        ->schema([
            TextInput::make('title'),
            TextInput::make('slug'),
            RichEditor::make('content'),
        ]);
}
}
