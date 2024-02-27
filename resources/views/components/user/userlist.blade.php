@props(['users'])
<td class="p-4">
    {{ $users->name }}
 </td>
 <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
    {{ $users->address }}
 </td>
 <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
    Php {{ number_format($users->credit_limit,2) }}
 </td>
 <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
    {{ $users->created_at }}
 </td>
