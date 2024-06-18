<!-- Modal for Edit Reservation -->
<div class="modal fade" id="editReservationModal" tabindex="-1" aria-labelledby="editReservationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editReservationForm">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="editReservationModalLabel">Edit Reservation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="reservation_id" id="edit_reservation_id">

                    <div class="mb-3">
                        <label for="edit_cust_name" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="edit_cust_name" name="cust_name" required>
                        <!-- Ubah name menjadi "cust_name" agar sesuai dengan validasi Laravel -->
                    </div>
                    <div class="mb-3">
                        <label for="edit_contact" class="form-label">Contact</label>
                        <input type="email" class="form-control" id="edit_contact" name="contact" required>
                        <!-- Ubah name menjadi "contact" agar sesuai dengan validasi Laravel -->
                    </div>
                    <div class="mb-3">
                        <label for="edit_reservation_date" class="form-label">Reservation Date & Time</label>
                        <input type="datetime-local" class="form-control" id="edit_reservation_date" name="reservation_date" required>
                        <!-- Ubah name menjadi "reservation_date" agar sesuai dengan validasi Laravel -->
                    </div>
                    <div class="mb-3">
                        <label for="edit_number_guest" class="form-label">Number of Guests</label>
                        <select class="form-select" id="edit_number_guest" name="number_guest" required>
                            <option value="1">People 1</option>
                            <option value="2">People 2</option>
                            <option value="3">People 3</option>
                        </select>
                        <!-- Ubah name menjadi "number_guest" agar sesuai dengan validasi Laravel -->
                    </div>
                    <div class="mb-3">
                        <label for="edit_special_request" class="form-label">Special Request</label>
                        <textarea class="form-control" id="edit_special_request" name="special_request" style="height: 100px"></textarea>
                        <!-- Ubah name menjadi "special_request" agar sesuai dengan validasi Laravel -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>