describe('paginate page test', () => {
    beforeEach(() => {
        cy.visit('/players/paginate');
    });

    it('displays title', () => {
        cy.get('h1').should('contain', 'Paginate');
    });

    it('displays table', () => {
        cy.get('body > :nth-child(2)').should('contain', 'Datatable');
        cy.get('body > :nth-child(3)').should('exist');
        cy.get(':nth-child(3) > thead > tr > :nth-child(1)').should('contain', 'Id');
        cy.get(':nth-child(3) > thead > tr > :nth-child(2)').should('contain', 'Name');
        cy.get(':nth-child(3) > thead > tr > :nth-child(3)').should('contain', 'Position');
        cy.get(':nth-child(3) > thead > tr > :nth-child(4)').should('contain', 'Team');
    });

    it('displays pagination', () => {
        cy.get('[href=""]').should('exist');
        cy.get('[href="http://tutorial-laravel-cursor-pagination.test/players/paginate?page=2"]').should('exist');
        cy.get('[href="http://tutorial-laravel-cursor-pagination.test/players/paginate?page=2"]').click();
        cy.get('[href="http://tutorial-laravel-cursor-pagination.test/players/paginate?page=1"]').should('exist');
    });

    it('displays query log', () => {
        cy.get('body > :nth-child(6)').should('contain', 'Query Log');
        cy.get('body > :nth-child(7)').should('exist');
        cy.get(':nth-child(7) > thead > tr > :nth-child(1)').should('contain', 'Query');
        cy.get(':nth-child(7) > thead > tr > :nth-child(2)').should('contain', 'Time');
    });
});