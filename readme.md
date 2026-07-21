# Laravel Results Summary

A Blade component for displaying a summary of items in a collection.

## Compatibility

| Package Version | Laravel Version | PHP Version |
| :--- | :--- | :--- |
| **^1.0.1** | 10.x, 11.x, 12.x, 13.x | ^8.2 |

## Installation

```bash
composer require paulmuldoon/laravel-results-summary
```

## Usage

```html
<x-results-summary class="text-gray-800 text-sm mb-3 font-bold" :items="$cars" empty="No cars found." :paginated="true" label="car" />
```

### Props
- :items - takes a collection of items to summarise, example "$cars".
- empty - the message displayed if the collection is empty, example "No cars found". Default is "No items found."
- :paginated - set to "true" if you are using a paginator on the collection. Default is "false". Will show for example "Showing 10 out of 25 cars" when this is set to true and "10 cars" if set to false.
- label - singular noun used to describe the collection being summarised, example "car". This will be pluralised automatically by the component if more than one item is found in the collection.

### Attributes
Takes standard HTML attributes such as class, id etc.
