# Laravel Results Summary

A Blade component for displaying a summary of items in a collection.

## Installation

```bash
composer require paulmuldoon/laravel-results-summary
```
## Usage

```html
<x-results-summary :items="$users" />
```
### Props
- :items - takes a collection of items to summarise, example "$cars".
- empty - the message displayed if the collection is empty, example "No cars found". Default is "No items found."
- :paginated - set to "true" if you are using a paginator on the collection. Default is "false". Will show for example "Showing 10 out of 25 cars" when this is set to true and "10 cars" if set to false.
- label - singular noun used to describe the collection being summarised, example "car". This will be pluralised automatically by the component if more than one item is found in the collection.

### Attributes
Takes standard HTML attributes such as class, id etc.
