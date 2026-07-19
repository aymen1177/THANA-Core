<td class="p-3 border">

    <a href="{{ route('services.edit', $service) }}"
       style="color:#2563eb;margin-left:10px;">
        تعديل
    </a>

    <form action="{{ route('services.destroy', $service) }}"
          method="POST"
          class="inline">

        @csrf
        @method('DELETE')

        <button type="submit"
                style="color:#dc2626;">
            حذف
        </button>

    </form>

</td>
