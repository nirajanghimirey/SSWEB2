<?php

namespace FriendsOfBotble\Ticksify\Http\Requests\Fronts;

use Botble\Support\Http\Requests\Request;
use FriendsOfBotble\Ticksify\Models\Category;
use Illuminate\Validation\Rule;

class TicketRequest extends Request
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'category_id' => ['nullable', Rule::exists(Category::class, 'id')],
            'content' => ['required', 'string', 'max:100000'],
        ];
    }
}
