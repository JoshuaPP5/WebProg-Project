<form action="/feedback" method="POST">
    @csrf
    <input type="hidden" name="tip_id" value="{{ $tip->id }}">
    
    <label>Rate this tip (1–5):</label>
    <input type="number" name="rating" min="1" max="5" required>

    <label>Comment (optional):</label>
    <textarea name="comment"></textarea>

    <button type="submit">Submit</button>
</form>