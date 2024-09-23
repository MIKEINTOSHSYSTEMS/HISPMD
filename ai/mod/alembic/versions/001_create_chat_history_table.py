"""create chat history table

Revision ID: 001_create_chat_history_table
Revises: None
Create Date: 2024-04-26 10:00:00.000000

"""
from alembic import op
import sqlalchemy as sa


# revision identifiers, used by Alembic.
revision = '001_create_chat_history_table'
down_revision = None
branch_labels = None
depends_on = None

def upgrade():
    # commands to upgrade the database to this revision
    op.create_table(
        'chat_history',
        sa.Column('id', sa.Integer, primary_key=True),
        sa.Column('chat_history', sa.String)
    )

def downgrade():
    # commands to revert the database to the previous revision
    op.drop_table('chat_history')
