<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                                @foreach($posts as $post) 
                                    <tr class="border-b">
                                        <td class="p-3">{{ $post->title }}</td>
                                        <th class="p-3">{{ Str::limit($post->content, 10) }}</td>
                                        <td class="p-3">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-500">Edit</a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 ml-2">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                 @endforeach 
</body>
</html>